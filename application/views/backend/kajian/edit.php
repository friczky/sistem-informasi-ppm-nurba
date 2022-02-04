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
                    <h1>Edit Jadwal Kajian</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url()?>dashboard/berita">Kajian</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Jadwal Kajian</li>
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
                    <h3 class="card-title">Form Edit Jadwal Kajian</h3>

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
								<?= form_open('backend/kajian/update')?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Kajian</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="nama"
                                    value="<?= $kajian['nama_kajian']?>"
                                    required="required">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ustadz Pengajar</label>
                                <select class="form-control" name="id_ustadz" required="required">
                                    <option value="<?= $kajian['id_ustadz']?>" ><?= $kajian['nama']?> (Terpilih)</option>
                                    <?php foreach ($ustadz as $u) : ?>
																		<option value="<?= $u->id_ustadz?>"><?= $u->nama?></option>
																		<?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hari</label>
                                <select name="hari" id="" class="form-control">
																		<option value="<?= $kajian['hari']?>"><?= $kajian['hari']?> (Terpilih)</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jam</label>
                                <input type="time" name="jam" id="" class="form-control" value="<?= $kajian['jam']?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pelaksanan</label>
                                <select name="pelaksanaan" id="" class="form-control">
																	<option value="<?= $kajian['pelaksanaan']?>"><?= $kajian['pelaksanaan']?> (Terpilih)</option>
                                    <option value="Online">Online</option>
                                    <option value="Offline">Offline</option>
                                </select>
                            </div>
                            <!-- /.form-group -->
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="form-group">
												<input type="hidden" name="id_kajian" value="<?= $kajian['id_kajian']?>">
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
