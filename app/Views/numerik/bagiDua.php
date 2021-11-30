<?= $this->extend('layouts/base'); ?>
<?= $this->section('content'); ?>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th>a</th>
                    <th>b</th>
                    <th>c</th>
                    <th>fa</th>
                    <th>fc</th>
                    <th>|a-b|</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($bagiDua as $data) : ?>
                    <tr>
                        <td><?= $data["no"]; ?></td>
                        <td><?= $data["a"]; ?></td>
                        <td><?= $data["b"]; ?></td>
                        <td><?= $data["c"]; ?></td>
                        <td><?= $data["fa"]; ?></td>
                        <td><?= $data["fc"]; ?></td>
                        <td><?= $data["ab"]; ?></td>
                    </tr>
                <?php endforeach ?>


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection(); ?>