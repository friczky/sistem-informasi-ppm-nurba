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
                    <h1>Berkas Pendaftaran</h1>
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
                    <form action="<?= base_url()?>santri/pendaftaran/berkas" method="POST">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Formulir Pendaftaran</label>
                        <div class="col-sm-10">
                            <input
                                type="file"
                                class="form-control"
                                name="formulir_pendaftaran"
                                value=""
                                id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Surat Izin Orang Tua</label>
                        <div class="col-sm-10">
                            <input
                                type="file"
                                class="form-control"
                                name="surat_izin"
                                value=""
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
                                value="Simpan"
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
