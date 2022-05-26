<?= $this->include('FirstDistrict/include/top') ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->

  <?= $this->include('FirstDistrict/include/nav')?>
  <?= $this->include('FirstDistrict/include/sidebar')?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Todo Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Todo Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Todo</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" id="add_todo" name="add_todo"
            action="<?= site_url('/add-todo') ?>">
              <div class="card-body">
                <div class="form-group">

                  <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="description" placeholder="Description">
                </div>

              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div></div></div></div></section>
          
        </div>


            <?= $this->include('FirstDistrict/include/end') ?>
