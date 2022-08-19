<?= $this->include('FirstDistrict/include/top') ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<!-- Navbar -->
<?= $this->include('FirstDistrict/include/nav') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->

<?= $this->include('FirstDistrict/include/sidebar') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manage Clients</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item active">Client List</li>
            <li class="breadcrumb-item"><a href="clientarchive">Archived Client</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Clients</h3>
              <a href="clientadd" style=" margin-left: 1400px; " class="btn btn-info pull-right">Add Client</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">



     <table class="table table-bordered table-striped" id="test">
       <thead>
          <tr>
            <th>Full Name</th>
             <th>Birthday</th>
             <th>Age</th>
             <th>Gender</th>
            <th>Mobile Number</th>
            <th>Occupation</th>
            <th>Barangay</th>
            <th>House Number</th>
            <th>Purpose</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($client_detail): ?>
          <?php foreach($client_detail as $user): ?>
            <tr>

               <td><a href = "/clientlist/<?=$user['id']?>"><?= $user['FirstName'] .' ' . $user['MiddleName'] . ' ' . $user['LastName'] ?></a></td>
               <td><?= $user['Birthday']; ?></td>
               <td><?= $user['Age']; ?></td>
               <td><?= $user['Gender']; ?></td>
               <td><?= $user['MobileNumber']; ?></td>
               <td><?= $user['Occupation']; ?></td>
               <td><?= $user['town'] . ', ' . $user['barangay'] . ', ' . $user['sitio']; ?></td>
               <td><?= $user['hono']; ?></td>
               <td><a href = "/letter/<?=$user['id']?>"><?= $user['Purpose']; ?></td>
               <td>
                 <button type="button"  data-id="<?= $user['id']?>" data-orderid="<?=$transactID?>" data-qty="<?=$order['quantity']?>"  data-price="<?= $order['price'] ?>" id="cj" data-toggle="modal" data-target=".bilangin" class="ps-btn ps-btn--xs product-item-cart btn btn-success product_type_simple add_to_cart_button cj">
                  <!-- <i class="fa fa-money-bill-wave fa-2xs"></i> -->
                </button><br>
                 <a   href="../ClientController/edit/<?php echo $user['id']; ?>">Edit</a>

               <a href="../ClientController/archive/<?php echo $user['id']; ?>" >Archive</a></td>
            </tr>

         <?php endforeach; ?>
         <?php endif;  ?>
       </tbody>
     </table>
   </div>
   <!-- /.card-body -->
 </div>
 <!-- /.card -->
 </div>
 <!-- /.col -->
 </div>
 <!-- /.row -->
 </div>
 <!-- /.container-fluid -->
 </section>
 <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

 <!-- Control Sidebar -->
 <div class="modal fade bilangin" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog modal-lg">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">Confirm action</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">

                   <h1>Enter Amount</h1>
                  
<?= $user['FirstName'] .' ' . $user['MiddleName'] . ' ' . $user['LastName'] ?>
                   <input type="text" id="quantity" class="form-control quantity-neto" placeholder="Quantity">
               </div>
               <div class="modal-footer">
                   <button type="button" id="confirm" class="btn btn-primary confirm"data-dismiss="modal">Confirm</button>
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
           </div>
       </div>
   </div>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->


   <?= $this->include('FirstDistrict/include/datatableEnd') ?>

   <script>
   $(document).ready(function(){
     $(".cj").click(function(){
       var id = $(this).attr("data-id");
       var qty = $(this).attr("data-qty");
       var price = $(this).attr("data-price");
       var status ="added";
       $(".psr").val(price);
       $(".id").val(id);
       $(".qty").val(qty);
     });
     $("#myInput").on("keyup", function() {
       var value = $(this).val().toLowerCase();
       $(".dropdown-menu li").filter(function() {
         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       });
     });
   }
   $(".cj").click(function(){
         var id = $(this).attr("data-id");
         var qty = $(this).attr("data-qty");
         var user = $(this).attr("data-user");
         var price = $(this).attr("data-price");
         var product = $(this).attr("data-product");
         var status ="added";
         $(".psr").val(price);
         $(".title-netos").text(product);
         $(".id").val(id);
         $(".qty").val(qty);
         $(".user").val(user);
       });
       $(".confirm").click(function(){
         // TableVar.ajax.reload();
         var id = $(".id").val();
         var qty =  parseInt($(".quantity-neto").val());
         var user = $(".user").val();
         var stkqty =  parseInt($(".qty").val());
         var price =  parseInt($(".psr").val());
         var status ="ORDERED";
         var transactID = $(".transactID").val();
         if(qty > stkqty){
           alert('invalid quantity range input');
         }else{
         $.ajax({
          url:'<?=base_url()?>/cashier/addsales',
          method:'POST',
          headers: {'X-Requested-With': 'XMLHttpRequest'},
          dataType:'text',
          data:{
            orderID: transactID,
            productsID: id,
            accountID:user,
            oquantity: qty,
            oprice: price,
            status:status,
          },
          success:function(data){
            console.log(data);

            $('#customersTable').DataTable().ajax.reload(null, false);
            reloadData();
            // $( ".total" ).append("<h2>" + qty + " </h2>" );

          }
        });

      }
     });
   );
   </script>

     <script>
     $(document).ready(function() {
         $('#test').DataTable( {
           responsive: true
         } );
     } );
     </script>
     <script>
 document.onkeydown = function(e) {
 if(event.keyCode == 123) {
 return false;
 }
 if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
 return false;
 }
 if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
 return false;
 }
 if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
 return false;
 }
 if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
 return false;
 }
 if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
 return false;
 }
 if(e.ctrlKey && e.keyCode == 'H'.charCodeAt(0)){
 return false;
 }
 if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
 return false;
 }
 if(e.ctrlKey && e.keyCode == 'F'.charCodeAt(0)){
 return false;
 }
 if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
 return false;
 }
 }
 /* To Disable Inspect Element */
 $(document).bind("contextmenu",function(e) {
  e.preventDefault();
 });

 $(document).keydown(function(e){
     if(e.which === 123){
        return false;
     }
 });
 </script>


</body>
</html>
