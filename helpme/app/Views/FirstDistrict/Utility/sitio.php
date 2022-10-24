
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-8">

        <!-- /.card -->

        <div class="card">

          <!-- /.card-header -->
          <div class="card-body">
            <?php if (isset($validation)) : ?>
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                    </div>
                </div>
            <?php endif; ?>

<form method="post"  action="UtilityController/store">

<div class="form-group">
    <label for="province">Province</label>
    <select name="Province"  class="form-control" >
    <option value="Oriental Mindoro" selected>Oriental Mindoro</option>
    </select>
</div>
<div class="form-group">
    <label for="town">Town</label>
    <select name="municipality" id="municipality" class="form-control" required>
      <option value="">Select Municipality</option>
    </select>
</div>
<div class="form-group">
    <label for="barangay">Barangay</label>
    <select name="barangay" id="barangay" class="form-control" required>
                <option value="">Select Barangay</option>
              </select>
</div>
<div class="form-group">
    <label for="sitio">Sitio</label>
    <input type="text" class="form-control" name="Sitio" placeholder="Sitio">

</div>

<button type="submit" name="submit" class="btn btn-success">Submit</button>
  </form>
    </div>
      </div>
        </div>
          </div>
            </div>

</section>
