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
              <li class="breadcrumb-item active">Edit Client</li>
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
                <h3 class="card-title">Update Client</h3><a href="<?= base_url('clientlist') ?>" style=" margin-left: 1350px;" class="btn btn-info pull-right">Client List</a>
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
    <form  action="../update" method="post">
      <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $client['id'] ?>">

      <div class="form-group">
          <label for="FirstName">First Name</label>
          <input type="text" class="form-control" name="FName" id="FName" value="<?= $client['FirstName'] ?>">
          </div>
      <div class="form-group">
          <label for="MiddleName">Middle Name</label>
          <input type="text" class="form-control" name="MName" id="MName" value="<?= $client['MiddleName'] ?>">
                            </div>
      <div class="form-group">
          <label for="LastName">Last Name</label>
          <input type="text" class="form-control" name="LName" id="LName" value="<?= $client['LastName'] ?>">
      </div>
      <div class="form-group">
          <label for="Birthday">Birthday</label>
          <input type="text" class="form-control" name="DOB" id="dob" value="<?= $client['Birthday'] ?>">

      </div>
      <div class="form-group">
          <label for="Age">Age</label>
          <input type="text" class="form-control" name="Age" id="age"readonly value="<?= $client['Age'] ?>">
      </div>
      <div class="form-group">
          <label for="Gender">Gender</label>
          <select name = "Gender" class="form-control" id="Gender" value="<?= $client['Gender'] ?>">
          <option ><?= $client['Gender'] ?></option>
          <option value=""></option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          </select>
      </div>
      <div class="form-group">
          <label for="MobileNumber">Mobile Number</label>
          <input type="text" class="form-control" name="MNumber" id="MNumber" value="<?= $client['MobileNumber'] ?>">
      </div>
      <div class="form-group">
          <label for="Occupation">Occupation</label>
          <input type="text" class="form-control" name="Occupation" id="Occupation" value="<?= $client['Occupation'] ?>">

      </div>
      <div class="form-group">
        <label for="province">Province</label>
        <select name="Province"  class="form-control" >
        <option value="Oriental Mindoro" selected>Oriental Mindoro</option>
        </select>
      </div>
      <div class="form-group">
        <label for="town">Town</label>
        <select name="municipality" id="municipality" class="form-control" required>
          <option><?= $client['town'] ?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="barangay">Barangay</label>
        <select name="barangay" id="barangay" class="form-control" required>
                    <option ><?= $client['barangay'] ?></option>
                  </select>
      </div>
      <div class="form-group">
          <label for="sitio">Sitio</label>
          <input type="text" class="form-control" name="Sitio" placeholder="Sitio"value="<?= $client['sitio'] ?>">

      </div>
      <div class="form-group">
          <label for="hono">House Number</label>
          <input type="text" class="form-control" name="HouseNumber" placeholder="House Number" value="<?= $client['hono'] ?>">

      </div>
      <div class="form-group">
        <label for="Purpose">Purpose</label>
        <select name = "Purpose" class="form-control" >
        <option value="<?= $client['Purpose'] ?>"></option>
        <option value="Medical">Medical</option>
        <option value="Medecine">Medecine</option>
        <option value="Laboratory">Laboratory</option>
        <option value="Funeral">Funeral</option>
        <option value="Transportation">Transportation</option>
        </select>

      </div>
        <button type="submit" name ="submit" class="btn btn-success">Submit</button>
    </form>
    </div>
  </div>
  </div>
  </div>
  </div>
</section>
</div>


    <?= $this->include('include/end') ?>
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
