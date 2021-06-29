<?= $this->extend('layouts/siswa_template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <br>
                        <br>
                        <br>
                        <h3 class="m-0 text-dark">Form Pendaftaran</h3>
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

                        <form action="<?php echo base_url() ?>/siswa/save" method="post" enctype="multipart/form-data">
                            <div class="card align-center mt-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?= csrf_field(); ?>
                                            <div class="form-group">
                                                <label for="nama">Nama Lengkap</label>
                                                <div>
                                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="nisn">NISN</label>
                                                <div>
                                                    <input type="number" class="form-control" id="nisn" name="nisn" value="<?= old('nisn'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                <div>
                                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= old('tempat_lahir'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir:</label>
                                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= old('tgl_lahir'); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <select class="form-control select2" style="width: 100%;" id="jenis_kelamin" name="jenis_kelamin" value="<?= old('jenis_kelamin'); ?>">
                                                    <option disabled selected>-- Pilh Jenis Kelamin --</option>
                                                    <option value="Pria">Pria</option>
                                                    <option value="Wanita">Wanita</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <div>
                                                    <input type="text" class="form-control" id="agama" name="agama" value="<?= old('agama'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="sekolah_asal">Sekolah Asal</label>
                                                <div>
                                                    <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" value="<?= old('sekolah_asal'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="nilai_mtk">Nilai MTK</label>
                                                <div>
                                                    <input type="number" class="form-control" id="nilai_mtk" name="nilai_mtk" value="<?= old('nilai_mtk'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="nilai_mtk">Nilai Inggris</label>
                                                <div>
                                                    <input type="number" class="form-control" id="nilai_inggris" name="nilai_inggris" value="<?= old('nilai_inggris'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="foto">Foto</label>
                                                <div>
                                                    <input type="file" name="foto" id="foto" value="<?= old('foto'); ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info float-right">Daftar</button>
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