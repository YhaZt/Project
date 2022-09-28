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
                        <th>Date Received</th>
                        <th>Representative</th>
                        <th>Mobile Number</th>
                        <th>Client Fullname</th>
                        <th>Diagnosis</th>
                        <th>Birthday</th>
                        <th>Address</th>
                        <th>Purpose</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if($users): ?>
                        <?php foreach($users as $user): ?>
                          <tr>
                            <td><?= $user['created_at']; ?></td>
                            <td><?= $user['Representative']; ?></td>
                            <td><?= $user['MobileNumber']; ?></td>
                            <td><?= $user['LastName'] .' ' . $user['MiddleName'] . ' ' . $user['FirstName']  ; ?></td>
                            <td><?= $user['Diagnosis'] . ', ' . $user['Hospital']; ?></td>
                            <td><?= $user['Birthday'] . ', ' . $user['Age'] . ' years old' ; ?></td>
                            <td><?= $user['town'] . ', ' . $user['barangay'] . ', ' . $user['sitio'] . ', ' . $user['hono']; ?></td>
                            <td><?= $user['Purpose']; ?></td>
                            <td><?= $user['Amount']; ?></td>

                          </tr>

                        <?php endforeach; ?>
                      <?php endif;  ?>
                    </tbody>
                    <tfoot>
                      <br>
                      <tr>
                        <th>Date Received</th>
                        <th>Representative</th>
                        <th>Mobile Number</th>
                        <th>Client Fullname</th>
                        <th>Diagnosis</th>
                        <th>Birthday</th>
                        <th>Address</th>
                        <th>Purpose</th>
                        <th>Amount</th>
                      </tr>
                    </tfoot>


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

  // $('#test').DataTable({
  //
  //          "dom": 'Bfrtip',
  //          "paging": true,
  //          "autoWidth": true,
  //          "columnDefs": [{
  //              "visible": true,
  //              "targets": -1
  //          }],
  //          buttons: [
  //              {
  //                  extend: 'print',
  //                  autoprint: true,
  //                  exportOptions: {
  //                      columns: [ 0, ':visible' ]
  //                  }
  //              },
  //              {
  //                  extend: 'excelHtml5',
  //                  exportOptions: {
  //                      columns: [ 0, ':visible' ]
  //                  }
  //              },
  //              {
  //                  extend: 'pdfHtml5',
  //                  exportOptions: {
  //                      columns: [ 0, ':visible' ]
  //
  //                  }
  //              },
  //              'colvis'
  //          ]
  //      });

  $(document).ready(function() {
    var printCounter = 0;

    // Append a caption to the table before the DataTables initialisation
    // $('#test').append('<caption style="caption-side: bottom">A fictional company\'s staff table.</caption>');

    $('#test').DataTable( {
      dom: 'Bfrtip',
      "paging": true,
      "autoWidth": true,
      "columnDefs": [{
        "visible": true,
        "targets": -1
      }],
      buttons: [
        {
          extend: 'print',
          footer: true,
          autoPrint: false,
          // messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.',
          // messageBottom: 'Logbook Report',
          exportOptions: {
            columns: [ 0, ':visible' ]
          }
        },
        {
          extend: 'pdf',
          // messageBottom: 'Logbook Report',
          exportOptions: {
            columns: [ 0, ':visible' ]
          }
        },
        {
          extend: 'csv',
          // messageBottom: 'Logbook Report',
          exportOptions: {
            columns: [ 0, ':visible' ]
          }
        },
        'colvis'
      ]
    } );
  } );

  // $('#example1').DataTable({
  //
  //            "dom": 'Bfrtip',
  //            "paging": true,
  //            "autoWidth": true,
  //            "columnDefs": [{
  //                "visible": true,
  //                "targets": -1
  //            }],
  //            buttons: [{
  //                extend: 'print',
  //                autoPrint: true,
  //                title: '',
  //                exportOptions: {
  //                       stripHtml: false
  //                   },
  //                //For repeating heading.
  //                repeatingHead: {
  //                    logo: '<?=base_url()?>/system_image/logo.jpg',
  //                    logoPosition: 'center',
  //                    logoStyle: 'center',
  //                    titleStyle: 'center',
  //                    title: '<br>Faculty: <?=$teacher['lastname']?>,<?=$teacher['firstname']?> <br> Acceptance average: <?=$acceptance?>'
  //                }
  //            }]
  //        });

  </script>

</body>
</html>
