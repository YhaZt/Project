
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">


     <table class="table table-bordered table-striped" id="test">
       <thead>
          <tr>
             <th>Id</th>
             <th>Last Name</th>
             <th>First Name</th>
             <th>Files</th>
          </tr>
       </thead>
       <tbody>
          <?php if($client_files): ?>
          <?php foreach($client_files as $user): ?>
            <tr>
               <td><?= $user['id']; ?></td>
                  <td><?= $user['LastName']; ?></td>
                     <td><?= $user['FirstName']; ?></td>
               <td><img src="<?= 'images' .'/'.$user['files']; ?>" width="200" height="100" alt=""> <?= $user['files']; ?></td>

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






     <script>
     $(document).ready(function() {
         $('#test').DataTable( {
             dom: 'Bfrtip',
             buttons: [
                 'copy', 'csv', 'excel', 'pdf', 'print'
             ]
         } );
     } );
     </script>
</body>
</html>
