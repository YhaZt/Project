<?= $this->include('FirstDistrict/include/top') ?>
<!-- Navbar -->
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?= $this->include('FirstDistrict/include/nav') ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <?= $this->include('FirstDistrict/include/sidebar') ?>


    <?php if(session()->getFlashdata('msg')): ?>
      <?= session()->getFlashdata('msg');?>
    <?php endif; ?>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Add Clients</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="home">Home</a></li>
                <li class="breadcrumb-item active">Adding Client</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-8">

              <!-- /.card -->
              <!-- add sitio din dito -->
              <!-- <div style="float: right; "class="card">
              <div class="card-body">
              <?php if (isset($validation)) : ?>
              <div class="col-12">
              <div class="alert alert-danger" role="alert">
              <?= $validation->listErrors() ?>
            </div>
          </div>
        <?php endif; ?>

        <form method="post"  action="UtilityController/store">

        <div class="form-group">
        <label for="province">Province</label>
        <select name="Province"  class="form-control" >
        <option value="Oriental Mindoro" selected>Oriental Mindoro</option>
      </select>
    </div>
    <div class="form-group">
    <label for="town">Town</label>
    <select name="municipality" id="municipality" class="form-control" required>
    <option value="">Select Municipality</option>
  </select>
</div>
<div class="form-group">
<label for="barangay">Barangay</label>
<select name="barangay" id="barangay" class="form-control" required>
<option value="">Select Barangay</option>
</select>
</div>
<div class="form-group">
<label for="sitio">Sitio</label>
<input type="text" class="form-control" name="Sitio" placeholder="Sitio">

</div>

<button type="submit" name="submit" class="btn btn-success">Submit</button>
</form>
</div>
</div> -->
<!-- end add sitio -->

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Add Client</h3><a href="clientlist" style=" margin-left: 100px;" class="btn btn-info pull-right">Client List</a>
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

    <form method="post"  action="ClientController/store">
      <div class="form-group">
        <label for="Representative">Representative Fullname</label>
        <input type="text" class="form-control" name="Rep" placeholder="Reperesentative Fullname">
      </div>
      <div class="form-group">
        <label for="FirstName">Client First Name</label>
        <input type="text" class="form-control" name="FName" placeholder="First Nane">
      </div>
      <div class="form-group">
        <label for="MiddleName">Client Middle Name</label>
        <input type="text" class="form-control" name="MName"placeholder="Middle Name" >
      </div>
      <div class="form-group">
        <label for="LastName">Client Last Name</label>
        <input type="text" class="form-control" name="LName" placeholder="Last Name">
      </div>
      <div class="form-group">
        <label for="Birthday">Birthday</label>
        <input type="text" class="form-control" name="DOB" id="dob" placeholder="Birthday" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="Age">Age</label>
        <input type="text" class="form-control" id="age"name="Age" placeholder="Age" readonly>

      </div>
      <div class="form-group">
        <label for="Gender">Gender</label>
        <select name = "Gender" class="form-control" >
          <option  value="">Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="MobileNumber">Mobile Number</label>
        <input type="text" class="form-control" name="MNumber"placeholder="Mobile Number" >
      </div>
      <div class="form-group">
        <label for="Occupation">Occupation</label>
        <input type="text" class="form-control" name="Occupation"placeholder="Occupation" >
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
          <option value="">Select Municipality</option>
        </select>
      </div>
      <div class="form-group">
        <label for="barangay">Barangay</label>
        <select name="barangay" id="barangay" class="form-control barangay" required>
          <option value="">Select Barangay</option>
        </select>
      </div>
      <div class="form-group">
        <label for="sitio">Sitio</label>
        <select name="sitio" id="sitio"  class="form-control sitio" >
          <option value="">Select Sitio</option>
        </select>


      </div>
      <div class="form-group">
        <label for="hono">House Number</label>
        <input type="text" class="form-control" name="HouseNumber" placeholder="House Number">
      </div>
      <div class="form-group">
        <label for="Diagnosis">Diagnosis</label>
        <input type="text" class="form-control" name="Diag" placeholder="Diagnosis">
      </div>
      <div class="form-group">
        <label for="Hospital">Hospital</label>
        <select name = "Hos" class="form-control" >
          <option  value="">Hospital</option>
          <option value="MAES">MAES</option>
          <option value="MMG">MMG</option>
          <option value="OMPH">OMPH</option>
          <option value="SMV">SMV</option>
          <option value="Luna Goco">Luna Goco</option>
        </select>
      </div>
      <div class="form-group">
        <label for="Purpose">Purpose</label>
        <select name = "Purpose" class="form-control" >
          <option  value="">Purpose</option>
          <option value="Hospital Bill">Hospital Bill</option>
          <option value="Burial">Funeral Assistance</option>
          <option value="Laboratory">Laboratory</option>
          <option value="Medical">Medical</option>
          <option value="Transportation">Transportation</option>
        </select>
      </div>

      <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>

  </div>
</div>


</div>
</div>
</div>

</section>
</div>

</body>



<?= $this->include('FirstDistrict/include/end') ?>

<script>
$(document).ready(function(){
  $("#barangay").click(function(){
    var brgy = $("#barangay").val();
    console.log(brgy);
    $.ajax({
      type: 'POST',
      url: '<?=base_url()?>/sitio',
      data:{
        brgy: brgy
      },
      success:function(rp){
        $('.sitio')
        .find('option')
        .remove()
        .end()
        .append('<option value="">Select Sitio</option>')
        .val('');
        var obj = jQuery.parseJSON(rp);
        $.each(obj, function(key, value) {
          $('.sitio')
          .append($('<option></option>').val(value.sitio).text(value.sitio));
        });
      }
    });
  });
})
</script>
