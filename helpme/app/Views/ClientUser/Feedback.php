<?= $this->include('ClientUser/include/top') ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->

  <?= $this->include('ClientUser/include/nav')?>
  <?= $this->include('ClientUser/include/sidebar')?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Feedback</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="client">Home</a></li>
              <li class="breadcrumb-item active">Feedback</li>
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
              <div class="card-header">
                <h3 class="card-title">Feedback</h3>
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

  <form method="post"  action="RequestController/store">

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="Name" placeholder="Name">
    </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="Email" placeholder="Email">
        </div>

            <div class="form-group">
                <label for="number">Number</label>
                <input type="text" class="form-control" name="Number" placeholder="Number">
            </div>

                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" class="form-control" name="Date" placeholder="Date">
                </div>

                    <div class="form-group">
                        <label for="proof">Proof</label>
                        <input type="text" class="form-control" name="Proof" placeholder="Proof">
                    </div>

                        <div class="form-group">
                            <label for="comments">Comments</label>
                            <input type="text" class="form-control" name="Comments" placeholder="Comments">
                        </div>

                            <div class="form-group">
                                <label for="sitio">Rating</label>
                                <span id="rateMe3"  class="rating-faces"></span>

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
  <script>
  $(document).ready(function() {
  $('#rateMe3').mdbRate();
  });
  </script>

</div>
</body>

<?= $this->include('ClientUser/include/end') ?>
