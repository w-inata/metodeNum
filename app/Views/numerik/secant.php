<?= $this->extend('layouts/base'); ?>
<?= $this->section('content'); ?>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th>x</th>
                    <th>xr+1</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($secant as $data) : ?>
                    <tr>
                        <td><?= $data["no"]; ?></td>
                        <td><?= $data["x"]; ?></td>
                        <td><?= $data["no"] == 0 ? "-" : $data["xr1"]; ?></td>
                    </tr>
                <?php endforeach ?>


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection(); ?>