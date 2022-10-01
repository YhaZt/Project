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
            <h1>Transaction Log</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="client">Home</a></li>
              <li class="breadcrumb-item active">Transaction Log</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
<div class="card-header">
<h3 class="card-title">Approved</h3>
</div>
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">



       <table class="table table-bordered table-striped" id="test">
         <thead>
            <tr>
              <th>Name</th>
               <th>Email</th>
               <th>Phone Number</th>
               <th>Request</th>
              <th>Status</th>
             <th>Amount</th>

            </tr>
         </thead>
         <tbody>
            <?php if($Approved): ?>
            <?php foreach($Approved as $user): ?>
              <tr>
                <td><?= $user['client_name']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['phone_no']; ?></td>
                <td><?= $user['request']; ?></td>
                <td><?= $user['status']; ?></td>
                <td><?= $user['amount']; ?></td>
              </tr>

           <?php endforeach; ?>
           <?php endif;  ?>
         </tbody>
       </table>

     </div>
     <!-- /.card-body -->
   </div>
   <!-- /.card -->
   </div>
   <!-- /.col -->
   </div>
   <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
   </section>

   <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="card-header">
<h3 class="card-title">Decline</h3>
         </div>
         <div class="col-12">
           <div class="card">

             <!-- /.card-header -->
             <div class="card-body">



      <table class="table table-bordered table-striped" id="test">
        <thead>
           <tr>
             <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Request</th>
             <th>Status</th>
             <th>Reason</th>

           </tr>
        </thead>
        <tbody>
           <?php if($Declined): ?>
           <?php foreach($Declined as $user): ?>
             <tr>
               <td><?= $user['client_name']; ?></td>
               <td><?= $user['email']; ?></td>
               <td><?= $user['phone_no']; ?></td>
               <td><?= $user['request']; ?></td>
               <td><?= $user['status']; ?></td>
               <td><?= $user['reason']; ?></td>
             </tr>

          <?php endforeach; ?>
          <?php endif;  ?>
        </tbody>
      </table>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  </div>
  <!-- /.col -->
  </div>
  <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
  </section>
   <!-- /.content -->
   </div>


<?= $this->include('ClientUser/include/end') ?>
<script>
$(document).ready(function() {
    $('#test').DataTable( {
      responsive: true
    } );
} );
</script>
