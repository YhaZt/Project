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
                        <th>Email</th>
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
                            <td><?= $user['email']; ?></td>
                            <td><?= $user['phone_no']; ?></td>
                            <td><?= $user['request']; ?></td>
                            <td><?= $user['status']; ?></td>
                            <td><?= $user['reason']; ?></td>
                            <td>
                              <button type="button" class="btn btn-link" data-id="<?= $user['id']?>"  id="cj" data-toggle="modal" data-target=".bilangin" class="ps-btn ps-btn--xs product-item-cart btn btn-success product_type_simple add_to_cart_button cj">
                                <!-- <i class="fa fa-money-bill-wave fa-2xs"></i> -->Add Amount
                              </button><br>
                              <!-- <a   href="../ClientController/regedit/<?php echo $user['id']; ?>">Approved</a> -->
                              <!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="../ClientController/decline/<?php echo $user['id']; ?>" >Decline</a></td> -->
                              <button type="button" class="btn btn-link" data-id="<?= $user['id']?>"  id="dec" data-toggle="modal" data-target=".bawal" class="ps-btn ps-btn--xs product-item-cart btn btn-success product_type_simple add_to_cart_button dec">
                                <!-- <i class="fa fa-money-bill-wave fa-2xs"></i> -->Decline
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
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Decline Modal -->
      <div id="my-modal" aria-hidden="true" aria-labelledby="myLargeModalLabel" class="modal fade bd-example-modal-lg bawal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Decline Client</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">


                  <div class="form-group">
                    <label for="decline">Decline Reason</label>
                    <input type="text" name="name" class="status">
                    <select name="reason-neto" id="reason" class="form-control select2bs4 reason-neto" style="width: 100%;">
                      <option  value="">Select Here</option>
                      <option value="blur">Blurry image</option>
                      <option value="barangay">No/Blurry Barangay Indigency</option>
                      <option value="hospital">No/Blurry Hospital Bill</option>
                      <option value="laboratory">No/Blurry Laboratory Test</option>
                      <option value="funeral">No/Blurry Funeral Contract</option>
                    </select>
                  </div>

                </div>

              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" name "submit" id="confirm" class="btn btn-primary confirm"data-dismiss="modal">Confirm</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>

      <!-- Control Sidebar -->
      <!-- Amount Modal -->
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
              <input type="text" name="id" class="id">
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
    <script>
    $(document).ready(function(){
      $(".cj").click(function(){

        var id = $(this).attr("data-id");
        $(".id").val(id);
        console.log(id);
      });
      $(".confirm").click(function(){
        // TableVar.ajax.reload();
        var id = $(".id").val();
        var qty =  parseInt($(".quantity-neto").val());
        $.ajax({
          url:'/ClientController/postamount',
          method:'POST',
          // headers: {'X-Requested-With': 'XMLHttpRequest'},
          // dataType:'text',
          data:{
            id:id,
            qty:qty
          },
          success:function(data){
            console.log(data);

            $('#test').DataTable().ajax.reload(null, false);
            // $( ".total" ).append("<h2>" + qty + " </h2>" );

          },
          error:function(error){
            console.log(eval(error));
          }
        });
      });
    });
    </script>


    <script>
    $(document).ready(function(){
      $(".dec").click(function(){

        var status = $(this).attr("data-status");
        $(".status").val(status);
        console.log(status);
      });
      $(".confirm").click(function(){
        // TableVar.ajax.reload();
        var status = $(".status").val();
        var reason =  parseInt($(".reason-neto").val());
        $.ajax({
          url:'/ClientController/postdecline',
          method:'POST',
          // headers: {'X-Requested-With': 'XMLHttpRequest'},
          // dataType:'text',
          data:{
            status:status,
            reason:reason
          },
          success:function(data){
            console.log(data);

            $('#test').DataTable().ajax.reload(null, false);
            // $( ".total" ).append("<h2>" + qty + " </h2>" );

          },
          error:function(error){
            console.log(eval(error));
          }
        });
      });
    });
    </script>



    <?= $this->include('FirstDistrict/include/end') ?>



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
