<?= $this->extend('layouts/admin_template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h3 class="m-0 text-dark">Edit Pendaftaran</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        $errors = session()->getFlashdata('errors');
                        if (!empty($errors)) { ?>
                            <div class="alert alert-danger" role="alert">
                                Whoops! Ada kesalahan saat input data, yaitu:
                                <ul>
                                    <?php foreach ($errors as $error) : ?>
                                        <li><?= esc($error) ?></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php } ?>

                        <form action="<?php echo base_url() ?>/admin/update/<?= $siswa['nisn']; ?>" method="post">
                            <div class="card align-center">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="nisn" value="<?= $siswa['nisn']; ?>">
                                            <div class="form-group">
                                                <label for="nama">Nama Lengkap</label>
                                                <div>
                                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="nisn">NISN</label>
                                                <div>
                                                    <input type="number" class="form-control" id="nisn" name="nisn" value="<?= $siswa['nisn']; ?>" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                <div>
                                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $siswa['tempat_lahir']; ?>" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir:</label>
                                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $siswa['tgl_lahir']; ?>" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <select class="form-control select2" style="width: 100%;" id="jenis_kelamin" name="jenis_kelamin" value="<?= $siswa['jenis_kelamin']; ?>" disabled="disabled">
                                                    <option value="<?php echo $siswa['jenis_kelamin'] ?>" selected=""><?php echo $siswa['jenis_kelamin'] ?> </option>
                                                    <option value="Pria">Pria</option>
                                                    <option value="Wanita">Wanita</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <div>
                                                    <input type="text" class="form-control" id="agama" name="agama" value="<?= $siswa['agama']; ?>" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="sekolah_asal">Sekolah Asal</label>
                                                <div>
                                                    <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" value="<?= $siswa['sekolah_asal']; ?>" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="nilai_mtk">Nilai MTK</label>
                                                <div>
                                                    <input type="number" class="form-control" id="nilai_mtk" name="nilai_mtk" value="<?= $siswa['nilai_mtk']; ?>" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="nilai_mtk">Nilai Inggris</label>
                                                <div>
                                                    <input type="number" class="form-control" id="nilai_inggris" name="nilai_inggris" value="<?= $siswa['nilai_inggris']; ?>" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status_terkini">Status</label>
                                                <select class="form-control select2" style="width: 100%;" id="status" name="status">
                                                    <option value="<?php echo $siswa['status'] ?>" selected=""><?php echo $siswa['status'] ?></option>
                                                    <option value="Diterima">Diterima</option>
                                                    <option value="Cadangan">Cadangan</option>
                                                    <option value="Tidak Diterima">Tidak Diterima</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info float-right">Update</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>