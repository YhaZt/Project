
<?= $this->include('FirstDistrict/include/top') ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Preloader -->

  <?= $this->include('FirstDistrict/include/nav')?>
  <?= $this->include('FirstDistrict/include/sidebar')?>

<br>
<br>
<br>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add Clients</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="home">Home</a></li>
          <li class="breadcrumb-item active">Uploading Client Files</li>
            <li class="breadcrumb-item"><a href="<?=base_url("/ClientController/list")?>">Client List</a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

    <div  style="margin-right:20px;"class="container section">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="text-center">Upload Client File Here</h3>
                <form action="<?= base_url('dropzone/upload') ?>" method="POST" enctype="multipart/form-data" class="dropzone" id='image-upload'>
                  <input type="hidden"name='id' value="<?= $name['LastName'].$name['FirstName']?>">
                  <input type ="hidden" name="name" value="<?=$name['id']?>">
                  <input type ="hidden" name="town" value="<?=$name['town']?>">
                  <input type ="hidden" name="brgy" value="<?=$name['barangay']?>">
                  <input type ="hidden" name="hos" value="<?=$name['Hospital']?>">
                  <input type ="hidden" name="diag" value="<?=$name['Diagnosis']?>">
                    <div>
                        <h3 class="text-center">Upload Multiple File By Click On Box</h3>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?= $this->include('upload-table') ?>
    </body>
    <script type="text/javascript">

        Dropzone.options.imageUpload = {
    maxFilesize: 10, // Mb
      acceptedFiles: ".pdf,",
    init: function () {
        // Set up any event handlers
        this.on('complete', function () {
            location.reload();
        });
    }
};

    </script>


<?= $this->include('FirstDistrict/include/end') ?>
