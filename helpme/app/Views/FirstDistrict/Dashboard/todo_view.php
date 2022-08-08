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
              <h3 class="card-title">View Todo</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

        <div class="d-flex justify-content-end">
            <a href="<?php echo site_url('/todo-form') ?>" class="btn btn-danger mb-3">Create Todo</a>
        </div>

        <?php if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
        } ?>

        <ul class="list-group">
            <?php if($todos): ?>
            <?php foreach($todos as $todo): ?>
            <li class="list-group-item">
                <h3><?php echo $todo['title']; ?></h3>
                <p><?php echo $todo['description']; ?></p>
                <p>
                    <a href="<?php echo base_url('edit-todo/'.$todo['id']);?>" class="text-decoration-none">Edit</a>
                    <a href="<?php echo base_url('delete-todo/'.$todo['id']);?>" class="text-decoration-none">Delete</a>
                </p>
            </li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>

    </div>

        </div>

        </div>
        </div>
      </section>
        </div>
</body>

  <?= $this->include('FirstDistrict/include/end') ?>
