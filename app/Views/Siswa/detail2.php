<?= $this->extend('layouts/siswa_template'); ?>

<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="container">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <br><br><br>
                    <h3 class="mb-0 text-gray-800">Detail Pendaftaran</h3>
                </div>
            </div>
            <div class="align-items-center justify-content-between mt-0 mb-4">
                <a href="<?php echo base_url('siswa/cetakdetail'); ?>" class="btn btn-info">Cetak <i class="fas fa-fw fa-print"></i></a>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="/foto/<?= $siswa['foto']; ?>" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <dl class="dl-horizontal">
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
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('product'); ?>" class="btn btn-outline-info float-right">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?= $this->endSection(); ?>