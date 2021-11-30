<?= $this->extend('layouts/base') ;?>
<?= $this->section('content') ;?>
<div class="row">
    <div class="col-8">
    <div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Skor</th>
                    <th>Frekuensi</th>
                </tr>
            </thead>
            <tbody> 
                <?php  $no = 0 ?> 
                <?php foreach ($frekuensiTabel as $data) : ?>
                    <tr>
                        <td><?= ++$no; ?></td>
                        <td><?= $data['key']; ?></td>
                        <td><?= $data['value']; ?></td>
                </tr> 
                <?php endforeach ?>
                
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    </div>
    </div>
    <div class="col-4">
    <div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <td>Minimum</td>
                <td><?= $min; ?></td>
            </tr>
            <tr>
                <td>Maximum</td>
                <td><?= $max; ?></td>
            </tr>
            <tr>
                <td>Average</td>
                <td><?= $avg; ?></td>
            </tr>
        </table>
    </div>
    <!-- /.card-body -->
    </div>
    </div>
</div>
<?= $this->endSection() ;?>