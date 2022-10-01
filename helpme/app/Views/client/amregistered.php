


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <table class="table table-bordered table-striped" id="test">
                    <thead>
                      <tr>
                      <th>Date</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Request</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if($client_detail): ?>
                        <?php foreach($client_detail as $user): ?>
                          <tr>

                            <td><?= date("M d, Y", strtotime($user['created_at'])); ?></td>
                            <td><?= $user['client_name']; ?></td>
                            <td><?= $user['phone_no']; ?></td>
                            <td><?= $user['request']; ?></td>
                            <td><?= $user['status']; ?></td>
                            <td><?= $user['amount']; ?></td>
                            <td>

                              <button type="button" data-cid="<?= $user['id']?>"   data-id="<?= $user['client_name']; ?>"  id="cj" data-toggle="modal" data-target=".uwu" class="btn btn-link cj">
                               <!-- <i class="fa fa-money-bill-wave fa-2xs"></i> --> Input Amount
                              </button><br>
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
      <div class="modal fade uwu" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm action</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <h1>Enter Amount</h1>

      Client Name: <?= $user['client_name']; ?>
                        <input type="text" id="amount" class="form-control amount-neto" placeholder="Amount" autocomplete="off" required>
                        <input type="hidden" name="id" class="id">
                        <input type="hidden" name="id" class="cid">
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="tbutton" class="btn btn-primary tbutton"data-dismiss="modal">Confirm</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
  <!-- Amount Dito -->


    </div>
    <!-- ./wrapper -->





    <script>
    $(document).ready(function() {
      $('#test').DataTable( {
        responsive: true
      } );
    } );
    </script>
