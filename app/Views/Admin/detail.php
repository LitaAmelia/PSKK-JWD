<?= $this->extend('layouts/admin_template'); ?>

<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="container">
    <div class="d-sm-flex align-items-center  mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Pendaftaran</h1>
    </div>
    <div class="align-items-center justify-content-between mt-0 mb-4">
        <a href="<?php echo base_url('admin/edit/' . $siswa['nisn']); ?>" class="btn btn-info">Edit <i class="fas fa-fw fa-edit"></i></a>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-10 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">Nama Lengkap</th>
                                <td>: <?= $siswa['nama']; ?> </td>
                            </tr>
                            <tr>
                                <th scope="row">NISN</th>
                                <td>: <?= $siswa['nisn']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tempat Lahir</th>
                                <td>: <?= $siswa['tempat_lahir']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Lahir</th>
                                <td>: <?= $siswa['tgl_lahir']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td>: <?= $siswa['jenis_kelamin']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Agama</th>
                                <td>: <?= $siswa['agama']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Sekolah Asal</th>
                                <td>: <?= $siswa['sekolah_asal']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td>: <?= $siswa['status']; ?></td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>