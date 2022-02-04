<?php 

$this->load->view('backend/komponen/header');
$this->load->view('backend/komponen/navbar');
$this->load->view('backend/komponen/sidebar-admin');

?>

<!-- Konten -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Ustadz</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url()?>dashboard/berita">Ustadz</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Data Ustadz</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Form Edit Ustadz</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <?= form_open_multipart('backend/ustadz/update')?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="nama"
                                    value="<?= $ustadz['nama']?>"
                                    required="required">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Hp/Wa</label>
                                <input
                                    type="text"
                                    name="telpon"
                                    class="form-control"
                                    id=""
                                    value="<?= $ustadz['telpon']?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="alamat"
                                    value="<?= $ustadz['alamat']?>"
                                    required="required">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="foto" id="">
                                <input type="hidden" name="foto_old" value="<?= $ustadz['nama']?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
						<input type="hidden" name="id_ustadz" value="<?= $ustadz['id_ustadz']?>">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </div>
                <?php form_close()?>
                <!-- /.card-body -->
                <div class="card-footer"></div>
            </div>
            <!-- /.card -->
        </div>
    </section>
</div>

<?php 

$this->load->view('backend/komponen/footer');

?>
