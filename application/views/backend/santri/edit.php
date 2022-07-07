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
                    <h1>Edit Santri</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url()?>dashboard/berita">Santri</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Santri</li>
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
                    <h3 class="card-title">Form Edit Santri</h3>

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
                <?= form_open_multipart("backend/santri/update/".$santri['id_pengguna'])?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="nama"
                                    value="<?= $santri['nama']?>"
                                    required="required">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Wali</label>
                                <input
                                    type="text"
                                    name="nama_wali"
                                    class="form-control"
                                    id=""
                                    value="<?= $santri['nama_wali']?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Hp</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="telpon"
                                    value="<?= $santri['telpon']?>"
                                    required="required">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Hp Wali</label>
                                <input
                                    type="text"
                                    name="telpon_wali"
                                    class="form-control"
                                    id=""
                                    value="<?= $santri['telpon_wali']?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="tempat_lahir"
                                    value="<?= $santri['tempat_lahir']?>"
                                    required="required">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input
                                    type="date"
                                    class="form-control"
                                    name="tanggal_lahir"
                                    value="<?= $santri['tanggal_lahir']?>"
                                    id=""
                                    required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kampus</label>
                                <select name="id_kampus" class="form-control" id="">
								<option value="<?php if($santri['id_kampus'] == null  ){  }else { echo $santri['id_kampus'] ; }?>">
								<?php if($santri['id_kampus'] == null){ echo "Pilih Kampus"; }else { echo $santri['nama_kampus'] ;}?>
							    </option>
								<?php foreach($kampus as $kampus){ ?>
									<option value="<?= $kampus->id_kampus?>"><?= $kampus->nama_kampus?></option>
								<?php }?>
							</select>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Angkatan</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="angkatan"
                                    value="<?= $santri['angkatan']?>"
                                    id=""
                                    required="required">
                            </div>
                        </div>

                        <!-- /.col -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="foto" id="">
                                <input type="hidden" name="foto_old" value="<?= $santri['foto']?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer"></div>
            </div>
            <?= form_close()?>
            <!-- /.card -->
        </div>
    </section>
</div>

<?php 

$this->load->view('backend/komponen/footer');

?>
