<?= $this->include('include/top') ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<!-- Navbar -->
<?= $this->include('include/nav') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->

<?= $this->include('include/sidebar') ?>
<body>
  <?php if(session()->getFlashdata('msg')): ?>
    <?= session()->getFlashdata('msg');?>
  <?php endif; ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Clients</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Edit Client Files</li>
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

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Update Client Files</h3><a href="<?= base_url('clientlist') ?>" style=" margin-left: 1350px;" class="btn btn-info pull-right">Client List</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <hr>
  <body>
    <?php if(session()->getFlashdata('msg')): ?>
      <?= session()->getFlashdata('msg');?>
    <?php endif; ?>
      <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $client['id'] ?>">


          <div  style="margin-right:20px;"class="container section">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <h3 class="text-center">Upload Client File Here</h3>
                      <form action="<?= base_url('dropzone/upload') ?>" method="POST" enctype="multipart/form-data" class="dropzone" id='image-upload'>
                          <div>
                              <h3 class="text-center">Upload Multiple File By Click On Box</h3>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
    </form>
</div>
</div>
</div>
</div>

    <?= $this->include('filemanager/FileTable') ?>
<script type="text/javascript">

    Dropzone.options.imageUpload = {
maxFilesize: 10, // Mb
  acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf,.docx",
init: function () {
    // Set up any event handlers
    this.on('complete', function () {
        location.reload();
    });
}
};

</script>

    <?= $this->include('include/end') ?>
  </body>
</html>
