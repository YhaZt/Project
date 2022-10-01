

  <table class="table table-bordered table-striped" id="test">
    <thead>
       <tr>
         <th>Name</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Request</th>
         <th>Status</th>
       </tr>
    </thead>
    <tbody>
       <?php if($client_detail): ?>
       <?php foreach($client_detail as $user): ?>
         <tr>

            <td><?= $user['client_name']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= $user['phone_no']; ?></td>
            <td><?= $user['request']; ?></td>
            <td><?= $user['status']; ?></td>

         </tr>

      <?php endforeach; ?>
      <?php endif;  ?>
    </tbody>
  </table>

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
