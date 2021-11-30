<?= $this->extend('layouts/base') ;?>
<?= $this->section('content') ;?>
<!-- general form elements -->
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url(); ?>/statistika/saveEditData" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Skor</label>
                    <input type="hidden" value="<?= $id; ?>" name="id">
                    <input type="number" value="<?= $skor; ?>" class="form-control" id="skor" name="skor" placeholder="Enter skor">
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="edit" class="btn btn-warning">edit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
<?= $this->endSection() ;?>