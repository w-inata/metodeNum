<?= $this->extend('layouts/base'); ?>
<?= $this->section('content'); ?>
<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Import</h3>
    </div>
    <!-- /.card-header -->
    <!-- session -->
    <?php
    if (session()->getFlashdata('message')) {
    ?>
        <div class="alert alert-info">
            <?= session()->getFlashdata('message') ?>
        </div>
    <?php
    }
    ?>
    <!-- form start -->
    <form method="post" action="<?= base_url(); ?>/ExportExcel/simpanExcel" enctype="multipart/form-data">
        <div class="form-group">
            <label>File Excel</label>
            <input type="file" name="fileexcel" class="form-control" id="file" required accept=".xls, .xlsx" /></p>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Upload</button>
        </div>
    </form>
</div>
<!-- /.card -->
<?= $this->endSection(); ?>