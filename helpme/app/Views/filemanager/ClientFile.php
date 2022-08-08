<?= $this->include('include/top') ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<!-- Navbar -->
<?= $this->include('include/nav') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->

<?= $this->include('include/sidebar') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manage Clients</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item active">Client File</li>
            <!-- <li class="breadcrumb-item"><a href="clientarchive">Archived Client</a></li> -->
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
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Clients</h3>
              <a href="clientadd" style=" margin-left: 1400px; " class="btn btn-info pull-right">Add Client File</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">



     <table class="table table-bordered table-striped" id="test">
       <thead>
          <tr>
             <th>Id</th>
             <th>First Name</th>
             <th>Middle Name</th>
              <th>Last Name</th>
              <th>Age</th>
              <th>Gender</th>
             <th>Mobile Number</th>
             <th>Occupation</th>
             <th>Address</th>
             <th>Purpose</th>
             <th>Date & Time</th>
             <th>Edit</th>
             <th>Status</th>
          </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $user): ?>
            <tr>

               <td><?= $user['id']; ?></td>
               <td><?= $user['FirstName']; ?></td>
               <td><?= $user['MiddleName']; ?></td>
               <td><?= $user['LastName']; ?></td>
               <td><?= $user['Age']; ?></td>
               <td><?= $user['Gender']; ?></td>
               <td><?= $user['MobileNumber']; ?></td>
               <td><?= $user['Occupation']; ?></td>
               <td><?= $user['Address']; ?></td>
               <td><?= $user['Purpose']; ?></td>
               <td><?= $user['created_at']; ?></td>
               <td><a class="btn btn-info pull-right"  href="../FileUpload/dropzone/<?php echo $user['id']; ?>">Edit</a></td>

               <td><a href="../ClientController/archive/<?php echo $user['id']; ?>" class="btn btn-info pull-right">Archive</a></td>
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

 <!-- ./wrapper -->





   <?= $this->include('include/datatableEnd') ?>

     <script>
     $(document).ready(function() {
         $('#test').DataTable( {

         } );
     } );
     </script>
</body>
</html>
