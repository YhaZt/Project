<?= $this->include('ClientUser/include/top') ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->

  <?= $this->include('ClientUser/include/nav')?>
  <?= $this->include('ClientUser/include/sidebar')?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transaction Log</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="client">Home</a></li>
              <li class="breadcrumb-item active">Transaction Log</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
<div class="card-header">
<h3 class="card-title">Approved</h3>
</div>
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">



       <table class="table table-bordered table-striped" id="test">
         <thead>
            <tr>
              <th>Name</th>
               <th>Email</th>
               <th>Phone Number</th>
               <th>Request</th>
              <th>Status</th>

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
                   <button type="button"  data-id="<?= $user['id']?>"  id="cj" data-toggle="modal" data-target=".bilangin" class="ps-btn ps-btn--xs product-item-cart btn btn-success product_type_simple add_to_cart_button cj">
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

   <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="card-header">
<h3 class="card-title">Decline</h3>
         </div>
         <div class="col-12">
           <div class="card">

             <!-- /.card-header -->
             <div class="card-body">



      <table class="table table-bordered table-striped" id="test">
        <thead>
           <tr>
             <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Request</th>
             <th>Status</th>
             <th>Reason</th>

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
                  <button type="button"  data-id="<?= $user['id']?>"  id="cj" data-toggle="modal" data-target=".bilangin" class="ps-btn ps-btn--xs product-item-cart btn btn-success product_type_simple add_to_cart_button cj">
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


<?= $this->include('ClientUser/include/end') ?>
<script>
$(document).ready(function() {
    $('#test').DataTable( {
      responsive: true
    } );
} );
</script>
