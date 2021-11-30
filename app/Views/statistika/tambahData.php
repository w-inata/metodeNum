<?= $this->extend('layouts/base') ;?>
<?= $this->section('content') ;?>
<!-- general form elements -->
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Tambah</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="<?= base_url(); ?>/statistika/saveData" method="POST">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Skor</label>
        <input type="number" class="form-control" id="skor" name="skor" placeholder="Enter skor">
      </div>
      
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" name="save" class="btn btn-primary">Save</button>
    </div>
  </form>
</div>
<!-- /.card -->
<?= $this->endSection() ;?>