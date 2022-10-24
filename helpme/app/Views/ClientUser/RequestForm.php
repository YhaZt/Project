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
              <?= $request ?></h1>
            <h5>
              <?php

                $Medical = "Indigency of patient<br>Birth Certificate<br>Hospital Bill<br>Only Pdf is accepted, maximum size is 5mb";
                $Laboratory = "Indigency of patient<br>Birth Certificate<br>Laboratory Test<br>Only Pdf is accepted, maximum size is 5mb";
                $Medicine = "Indigency of patient<br>Birth Certificate<br>Reseta<br>Only Pdf is accepted, maximum size is 5mb";
                $Funeral = "Indigency of patient<br>Birth Certificate<br>Funeral Contract<br>Only Pdf is accepted, maximum size is 5mb";
                $Transportation = "Indigency of Client<br>Birth Certificate <br><br>Only Pdf is accepted, maximum size is 5mb";

              if($request == 'Medical'){
                echo "<br><br>Recuirements: <br><br>" . $Medical;
              }elseif ($request == 'Laboratory') {
                  echo "<br><br>Recuirements:<br><br>" . $Laboratory;
                }elseif ($request == 'Medicine') {
                  echo "<br><br>Recuirements:<br><br>" . $Medicine;
                }elseif ($request == 'Funeral') {
                  echo "<br><br>Recuirements:<br><br>" . $Funeral;
                }elseif ($request == 'Transportation') {
                  echo "<br><br>Recuirements:<br><br>" . $Transportation;
                }

               ?>

            </h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="client">Home</a></li>
              <li class="breadcrumb-item active">Request Page</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
<br>
<!-- compare date date difference -->

<?php

$date1 = date("Y-m-d");
$date2 = date("Y-m-d", $data['rupdated_at']);
$diff = abs(strtotime($date2) - strtotime($date1));
// echo $data['rupdated_at'];
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

 // printf($days);
?>

    <div style="margin-right:20px;"class="container section">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="text-center">Upload Client File Here</h3>
                <form action="<?= base_url('drop') ?>" method="POST" enctype="multipart/form-data" class="dropzone" id='image-upload'>
                  <input type="hidden" name="name" value="<?=$name?>">
                  <input type="hidden" name="id" value="<?=$id?>">
                  <input type="hidden" name="request" value="<?=$request?>">
                  <input type="hidden" name="phone_no" value="<?=$phone_no?>">
                  <input type="hidden" name="email" value="<?=$email?>">
                    <div>
                        <h3 class="text-center">Upload Multiple File By Click On Box</h3>
                    </div>
                </form>
                <!-- <?php
               if($data){
             if($days > 90){ ?>
                <form action="<?= base_url('drop') ?>" method="POST" enctype="multipart/form-data" class="dropzone" id='image-upload'>
                  <input type="hidden" name="name" value="<?=$name?>">
                  <input type="hidden" name="id" value="<?=$id?>">
                  <input type="hidden" name="request" value="<?=$request?>">
                  <input type="hidden" name="phone_no" value="<?=$phone_no?>">
                  <input type="hidden" name="email" value="<?=$email?>">
                    <div>
                        <h3 class="text-center">Upload Multiple File By Click On Box</h3>
                    </div>
                </form>
              <?php }else{

              }
            }else{
                ?>
                <form action="<?= base_url('drop') ?>" method="POST" enctype="multipart/form-data" class="dropzone" id='image-upload'>
                  <input type="hidden" name="name" value="<?=$name?>">
                  <input type="hidden" name="id" value="<?=$id?>">
                  <input type="hidden" name="request" value="<?=$request?>">
                  <input type="hidden" name="phone_no" value="<?=$phone_no?>">
                  <input type="hidden" name="email" value="<?=$email?>">
                    <div>
                        <h3 class="text-center">Upload Multiple File By Click On Box</h3>
                    </div>
                </form>
                <?php
              }?> -->
            </div>
        </div>
    </div>

<div>
  <div>


    </body>
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










<?= $this->include('ClientUser/include/end') ?>
