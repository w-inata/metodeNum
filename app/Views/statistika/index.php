<?= $this->extend('layouts/base') ;?>
<?= $this->section('content') ;?>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Skor</th>
                    <th style="width: 180px">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php $p = 1 ?>
                <?php foreach ($datas as $data) : ?>
                 
                    <tr>
                    <td><?= $p++; ?></td>
                    <td><?= $data["skor"]; ?></td>
                    <td>
                        <a class="btn btn-warning" href="<?= base_url(); ?>/statistika/editData?id=<?= $data['id']; ?>&skor=<?= $data['skor']; ?>">Edit</a>
                        <a onclick="return confirm('Anda yakin?')" class="btn btn-danger" href="<?= base_url(); ?>/statistika/deleteData?id=<?= $data['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>
                
                
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ;?>