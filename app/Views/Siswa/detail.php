<?= $this->extend('layouts/siswa_template'); ?>

<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="container">
    <div class="d-sm-flex align-items-center  mb-4">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 class="h3 mb-0 text-gray-800">Detail Pendaftaran</h1>
    </div>
    <div class="align-items-center justify-content-between mt-0 mb-4">
        <a href="<?php echo base_url('siswa/cetakdetail'); ?>" class="btn btn-info">Cetak <i class="fas fa-fw fa-print"></i></a>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-10 col-lg-7">
            <div class="card shadow mb-4">
                <img class="card-img-top" src="/img/<?= $dessert['referensi']; ?>" class="card-img" alt="...">
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">Nama Lengkap</th>
                                <td>: Lita </td>
                            </tr>
                            <tr>
                                <th scope="row">NISN</th>
                                <td>: 43763248843</td>
                            </tr>
                            <tr>
                                <th scope="row">Tempat Lahir</th>
                                <td>: hbehfjd</td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Lahir</th>
                                <td>: jsfhdsfj</td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td>: wanita</td>
                            </tr>
                            <tr>
                                <th scope="row">Agama</th>
                                <td>: islam</td>
                            </tr>
                            <tr>
                                <th scope="row">Sekolah Asal</th>
                                <td>: smansa</td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td>: menunggu</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>