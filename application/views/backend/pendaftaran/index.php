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
                    <h1>Pendaftaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Pendaftaran</a>
                        </li>
                        <li class="breadcrumb-item active">Data Pendaftar</li>
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
                    <h3 class="card-title">Semua Data Pendaftar.</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>No Hp</th>
                                <th>Kampus</th>
                                <th>Foto</th>
                                <th>Data Lengkap</th>
                                <th>Berkas Pendaftaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php $no=1; foreach ($pendaftar as $p): ?>
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $p->nama?></td>
                                <td><?= $p->telpon?></td>
                                <td><?= $p->kampus?> </td>
                                <td><?= base_url()?>uploads/pendaftar/<?= $p->foto?> </td>
                                <td>
                                    <a href="#" class="badge badge-info" data-toggle="modal" data-target="#data<?= $p->id_pendaftar?>">Klik Disini</a>
                                </td>
                                <td>
                                    <a href="#" class="badge badge-info" data-toggle="modal" data-target="#berkas">Klik Disini</a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-flat">Opsi</button>
                                        <button
                                            type="button"
                                            class="btn btn-success btn-flat dropdown-toggle dropdown-icon"
                                            data-toggle="dropdown">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                Terima</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-cross    "></i>
                                                Tolak</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-edit    "></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
							<?php endforeach; ?>		
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</section>

<!-- modal berkas pendaftaran -->

<div class="modal fade" id="berkas" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Berkas Pendaftar : Alfin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table" border="1">
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Formulir Pendaftaran</td>
                            <td>
                                <a href="">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </i>
                                Download</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer right">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
    		</div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<!-- modal data pendaftaran -->
<?php $no=1; foreach ($pendaftar as $p): ?>
<div class="modal fade" id="data<?= $p->id_pendaftar?>" style="display: none;" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content bg-default">
        <div class="modal-header">
            <h4 class="modal-title">Data Lengkap : <?= $p->nama?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
           <table class="table">
			   
						 <tr>
							 <td>Nama</td>
							 <td>:</td>
							 <td><?= $p->nama?></td>
						 </tr>
						 <tr>
							 <td>Nama Panggilan</td>
							 <td>:</td>
							 <td><?= $p->nama_panggilan?></td>
						 </tr>
						 <tr>
							 <td>Tempat Lahir</td>
							 <td>:</td>
							 <td><?= $p->tempat_lahir?></td>
						 </tr>
						 <tr>
							 <td>Tanggal Lahir</td>
							 <td>:</td>
							 <td><?= $p->tanggal_lahir?></td>
						 </tr>
						 <tr>
							 <td>Cita-Cita</td>
							 <td>:</td>
							 <td><?= $p->cita_cita?></td>
						 </tr>
						 <tr>
							 <td>Alamat Asal</td>
							 <td>:</td>
							 <td><?= $p->alamat_asal?></td>
						 </tr>
						 <tr>
							 <td>Alamat Sekarang</td>
							 <td>:</td>
							 <td><?= $p->alamat_sekarang?></td>
						 </tr>
						 <tr>
							 <td>Email</td>
							 <td>:</td>
							 <td><?= $p->email?></td>
						 </tr>
						 <tr>
							 <td>No Hp/ Wa</td>
							 <td>:</td>
							 <td><?= $p->telpon?></td>
						 </tr>
						 <tr>
							 <td>Kampus</td>
							 <td>:</td>
							 <td><?= $p->kampus?></td>
						 </tr>
						 <tr>
							 <td>Semester</td>
							 <td>:</td>
							 <td><?= $p->semester?></td>
						 </tr>
						 <tr>
							 <td>Foto</td>
							 <td>:</td>
							 <td><?= $p->foto?></td>
						 </tr>
					 </table>
    </div>
    <div class="modal-footer right">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
    </div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<?php endforeach;?>
<?php 

$this->load->view('backend/komponen/footer');

?>
