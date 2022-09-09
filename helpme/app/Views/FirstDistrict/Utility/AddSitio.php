<?= $this->include('FirstDistrict/include/top') ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->

  <?= $this->include('FirstDistrict/include/nav')?>
  <?= $this->include('FirstDistrict/include/sidebar')?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Sitio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Adding Sitio</li>
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

            <div class="card">
            
              <!-- /.card-header -->
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
          </div>
            </div>
              </div>
                </div>

  </section>
  </div>


<?= $this->include('FirstDistrict/include/end') ?>
