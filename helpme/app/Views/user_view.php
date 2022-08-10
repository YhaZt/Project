<?= $this->include('FirstDistrict/include/top') ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<!-- Navbar -->
<?= $this->include('FirstDistrict/include/nav') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->

<?= $this->include('FirstDistrict/include/sidebar') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
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
              <h3 class="card-title">Client Report DataTable</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">



     <table class="table table-bordered table-striped" id="test">
       <thead>
          <tr>
             <th>Id</th>
            <th>Full Name</th>
              <th>Birthday</th>
              <th>Age</th>
              <th>Gender</th>
             <th>Mobile Number</th>
             <th>Occupation</th>
             <th>Barangay</th>
             <th>House Number</th>
             <th>Purpose</th>
             <th>Date & Time</th>
          </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $user): ?>
            <tr>
               <td><?= $user['id']; ?></td>
              <td><?= $user['FirstName'] .' ' . $user['MiddleName'] . ' ' . $user['LastName']  ; ?></td>
               <td><?= $user['Birthday']; ?></td>
               <td><?= $user['Age']; ?></td>
               <td><?= $user['Gender']; ?></td>
               <td><?= $user['MobileNumber']; ?></td>
               <td><?= $user['Occupation']; ?></td>
              <td><?= $user['town'] . ', ' . $user['barangay'] . ', ' . $user['sitio']; ?></td>
               <td><?= $user['hono']; ?></td>
               <td><?= $user['Purpose']; ?></td>
               <td><?= $user['created_at']; ?></td>

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
 <!-- /.content-wrapper -->

 <!-- Control Sidebar -->

 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->





   <?= $this->include('FirstDistrict/include/datatableEnd') ?>


     <script type="text/javascript">

     $('#test').DataTable({

              "dom": 'Bfrtip',
              "paging": true,
              "autoWidth": true,
              "columnDefs": [{
                  "visible": true,
                  "targets": -1
              }],
              buttons: [{
                  extend: 'print'  ,
                  autoPrint: true,
                  title: '',
                  exportOptions: {
                  stripHtml: false
                     },
                  //For repeating heading.
                  repeatingHead: {
                      logo: '<?=base_url()?>/system_image/logo.jpg',
                      logoPosition: 'center',
                      logoStyle: 'center',
                      titleStyle: 'center',
                      title:'Help Me: Tracker'
                  }
              }]
          });
     </script>

</body>
</html>
