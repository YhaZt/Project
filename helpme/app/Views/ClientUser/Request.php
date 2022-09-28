<?= $this->include('ClientUser/include/top') ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->

  <?= $this->include('ClientUser/include/nav')?>
  <?= $this->include('ClientUser/include/sidebar')?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              Request Page
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="client">Home</a></li>
              <li class="breadcrumb-item active">Request Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Request Panel
                </h3>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  Request
                </button>
                </div>
              </div>
              <!-- /.card -->
            </div>

                <?= $this->include('ClientUser/RTable') ?>

      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Request</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">

                      <form method="post"  action="RequestController/reqform">
                      <div class="form-group">
                      <label for="request">Request</label>
                      <select name="request"class="form-control select2bs4" style="width: 100%;">
                      <option selected="selected">Select Here</option>
                      <option value="Medical">Medical Assistance</option>
                      <option value="Laboratory">Laboratory Assistance</option>
                      <option value="Medicine">Medicine Assistance</option>
                      <option value="Funeral">Funeral Assistance</option>
                      <option value="Transportation">Transportation Assistance</option>
                      </select>
                    </div>

                  </div>

                </div>
                <!-- /.row -->
              </div>


            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-primary">Proceed</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</div>

<?= $this->include('ClientUser/include/end') ?>
