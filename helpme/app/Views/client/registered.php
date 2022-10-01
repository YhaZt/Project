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
                <div class="card-body">
                  <table class="table table-bordered table-striped" id="test">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Files</th>
                        <th>Phone Number</th>
                        <th>Request</th>
                        <th>Status</th>
                        <th>Reason</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if($client_detail): ?>
                        <?php foreach($client_detail as $user): ?>
                          <tr>


                            <td><?= $user['client_name']; ?></td>
                            <td><a href = "<?=$user['client_files']?>"> <?= $user['client_files']; ?></td>
                            <td><?= $user['phone_no']; ?></td>
                            <td><?= $user['request']; ?></td>
                            <td><?= $user['status']; ?></td>
                            <td><?= $user['reason']; ?></td>
                            <td>
                              <button type="button" data-cid="<?= $user['id']?>"   data-id="<?= $user['client_name']; ?>"  id="cj" data-toggle="modal" data-target=".bilangin" class="btn btn-link cj">
                               <!-- <i class="fa fa-money-bill-wave fa-2xs"></i> --> Decline
                              </button><br>

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
        <?= $this->include('client/amregistered') ?>
        <!-- /.content -->
      </div>

      <!-- /.content-wrapper -->
<!-- Decline Dito -->
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

                  <h1>Decline</h1>

Client Name: <?= $user['client_name']; ?>

      <div class="form-group">
                    <label for="decline">Decline Reason</label>

                    <select  id="quantity" class="form-control quantity-neto" style="width: 100%;" required>
                      <option  value="">Select Here</option>
                      <option value="Blurry image">Blurry image</option>
                      <option value="No/Blurry Barangay Indigency">No/Blurry Barangay Indigency</option>
                      <option value="No/Blurry Hospital Bill">No/Blurry Hospital Bill</option>
                      <option value="No/Blurry Laboratory Test">No/Blurry Laboratory Test</option>
                      <option value="No/Blurry Funeral Contract">No/Blurry Funeral Contract</option>
                    </select>

                    <input type="hidden"  class="cid">
                    <input type="hidden" name="id" class="id">
                  </div>

                  <!-- <input type="text" id="quantity" class="form-control quantity-neto" placeholder="Amount"> -->
                  <!-- <input type="text" name="id" class="id"> -->
              </div>
              <div class="modal-footer">
                  <button type="button" id="confirm" class="btn btn-primary confirm"data-dismiss="modal">Confirm</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>




    </div>
    <!-- ./wrapper -->




    <?= $this->include('FirstDistrict/include/end') ?>
<!-- Decline -->
    <script>
    $(document).ready(function(){

      $(".cj").click(function(){
        var cid = $(this).attr("data-cid");
         $(".cid").val(cid);
         console.log(cid);

        var id = $(this).attr("data-id");
         $(".id").val(id);
         console.log(id);
      });
      $(".tbutton").click(function(){
        var id = $(".cid").val();
        var qty =  parseInt($(".amount-neto").val());
        // console.log(qty);
        $.ajax({
         url:'/ClientController/postcamount',
         method:'POST',
           // headers: {'X-Requested-With': 'XMLHttpRequest'},
           // dataType:'text',
         data:{
           id:id,
           qty:qty
         },

         success:function(data){
           console.log(data);
           location.reload();

         },
         error:function(error){
         console.log(eval(error));
         }

       });
      })
      $(".confirm").click(function(){
        // TableVar.ajax.reload();
        var id = $(".cid").val();
        var qty =  $(".quantity-neto").val();
        // console.log(qty);
        $.ajax({
         url:'/ClientController/postdecline',
         method:'POST',
           // headers: {'X-Requested-With': 'XMLHttpRequest'},
           // dataType:'text',
         data:{
           id:id,
           qty:qty
         },

         success:function(data){
           console.log(data);
           location.reload();

         },
         error:function(error){
         console.log(eval(error));
         }

       });
     });
    });

    </script>

    <script>
    $(document).ready(function() {
      $('#test').DataTable( {
        responsive: true
      } );
    } );
    </script>


  </body>
  </html>
