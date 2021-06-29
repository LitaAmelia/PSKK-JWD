<?= $this->extend('layouts/admin_template'); ?>

<?= $this->section('content'); ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Pengguna</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <!-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div> -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($user as $u) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $u['nama']; ?></td>
                            <td><?= $u['username']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>