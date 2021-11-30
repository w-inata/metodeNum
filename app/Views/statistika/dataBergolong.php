<?= $this->extend('layouts/base'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Rentang</th>
                            <th>Frekuensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0 ?>
                        <?php foreach ($bergolongTabel as $data) : ?>
                            <tr>
                                <td><?= ++$no; ?></td>
                                <td><?= $data['key']; ?> - <?= $data['keyLast']; ?></td>
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
                        <td>Rentangan</td>
                        <td><?= $r; ?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td><?= $k; ?></td>
                    </tr>
                    <tr>
                        <td>Interval</td>
                        <td><?= $i; ?></td>
                    </tr>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>