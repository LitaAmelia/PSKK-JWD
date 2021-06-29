<?= $this->extend('layouts/admin_template'); ?>

<?= $this->section('content'); ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Siswa Pendaftar</h1>

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
                        <th>NISN</th>
                        <th>Sekolah Asal</th>
                        <th>Jenis Kelamin</th>
                        <th>Nilai Matematika</th>
                        <th>Nilai B.Inggris</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($siswa as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $s['nama']; ?></td>
                            <td><?= $s['nisn']; ?></td>
                            <td><?= $s['sekolah_asal']; ?></td>
                            <td><?= $s['jenis_kelamin']; ?></td>
                            <td><?= $s['nilai_mtk']; ?></td>
                            <td><?= $s['nilai_inggris']; ?></td>
                            <td>
                                <a href="<?php echo base_url('siswa/detail/' . $s['nisn']); ?>" class="btn btn-primary" class="d-inline">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>