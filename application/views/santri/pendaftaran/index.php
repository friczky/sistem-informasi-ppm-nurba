<?php 

$this->load->view('santri/komponen/header');
$this->load->view('santri/komponen/navbar');
$this->load->view('santri/komponen/sidebar-santri');

?>

<!-- Konten -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pendaftaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Pendaftaran</a>
                        </li>
                        <li class="breadcrumb-item active">Santri</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kosutmisasi Sistem Web.</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="<?= base_url()?>santri/pendaftaran" method="POST">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="nama"
								<?php if($pendaftaran > 0) { ?>
                                value="<?= $pendaftaran['nama'] ?>"
								<?php }else{?>
								placeholder="Masukan Nama Lengkap"
								<?php }?>
                                id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama Panggilan</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="nama_panggilan"
                                <?php if($pendaftaran > 0) { ?>
                                value="<?= $pendaftaran['nama_panggilan'] ?>"
								<?php }else{?>
								placeholder="Masukan Nama Panggilan"
								<?php }?>
                                id="">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="tempat_lahir"
                                <?php if($pendaftaran > 0) { ?>
                                value="<?= $pendaftaran['tempat_lahir'] ?>"
								<?php }else{?>
								placeholder="Masukan Tempat Lahir"
								<?php }?>
                                id="">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input
                                type="date"
                                class="form-control"
                                name="tanggal_lahir"
                                <?php if($pendaftaran > 0) { ?>
                                value="<?= $pendaftaran['tanggal_lahir'] ?>"
								<?php }else{?>
								<?php }?>
                                id="">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Cita-Cita</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="cita_cita"
                                <?php if($pendaftaran > 0) { ?>
                                value="<?= $pendaftaran['cita_cita'] ?>"
								<?php }else{?>
								placeholder="Masukan Cita Cita"
								<?php }?>
                                id="">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Alamat Asal</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="alamat_asal"
                                <?php if($pendaftaran > 0) { ?>
                                value="<?= $pendaftaran['alamat_asal'] ?>"
								<?php }else{?>
								placeholder="Masukan Alamat Asal"
								<?php }?>
                                id="">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Alamat Sekarang</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="alamat_selakarang"
                                <?php if($pendaftaran > 0) { ?>
                                value="<?= $pendaftaran['alamat_sekarang'] ?>"
								<?php }else{?>
								placeholder="Masukan Alamat Sekarang"
								<?php }?>
                                id="">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="email"
                                <?php if($pendaftaran > 0) { ?>
                                value="<?= $pendaftaran['email'] ?>"
								<?php }else{?>
								placeholder="Masukan Alamat Email"
								<?php }?>
                                id="">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Telpon</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="telpon"
                                <?php if($pendaftaran > 0) { ?>
                                value="<?= $pendaftaran['telpon'] ?>"
								<?php }else{?>
								placeholder="Masukan Nomor Telpon/Whatsapp"
								<?php }?>
                                id="">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Kampus</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="kampus"
                                <?php if($pendaftaran > 0) { ?>
                                value="<?= $pendaftaran['kampus'] ?>"
								<?php }else{?>
								placeholder="Masukan Nama Kampus"
								<?php }?>
                                id="">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Semester</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="semester"
                                <?php if($pendaftaran > 0) { ?>
                                value="<?= $pendaftaran['semester'] ?>"
								<?php }else{?>
								placeholder="Masukan Semester Sekarang"
								<?php }?>
                                id="">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input
                                type="file"
                                class="form-control"
                                name="foto"
                                <?php if($pendaftaran > 0) { ?>
                                value="<?= $pendaftaran['nama_panggilan'] ?>"
								<?php }else{?>
								placeholder="Masukan Nama Panggilan"
								<?php }?>
                                id="">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Aksi</label>
                        <div class="col-sm-10">
                            <input
                                type="submit"
                                class="btn btn-primary"
                                name="simpan"
                                <?php if($pendaftaran > 0) { ?>
                                value="Perbahrui"
								<?php }else{?>
								value="Simpan"
								<?php }?>
                                id="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
<?php 
$this->load->view('santri/komponen/footer');
?>
