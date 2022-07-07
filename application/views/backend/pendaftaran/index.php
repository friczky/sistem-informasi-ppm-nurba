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
								<th>Status</th>
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
                                <td><img src="<?= base_url()?>uploads/santri/<?= $p->foto?>" width="50px" alt=""> </td>
                                <td>
                                    <a href="#data<?= $p->id_pengguna ?>" class="badge badge-info" data-toggle="modal" data-target="#data<?= $p->id_pengguna ?>">Klik Disini</a>
                                </td>
                                <td>
                                    <a href="#berkas<?= $p->id_pengguna ?>" class="badge badge-primary" data-toggle="modal" data-target="#berkas<?= $p->id_pengguna ?>">Klik Disini</a>
                                </td>
								<td>
									<?php if($p->status_santri == '0'){ ?>
										<div  class="badge badge-success">Lulus</div>
									<?php }elseif($p->status_santri == '1'){ ?>
										<div class="badge badge-info">Belum Dikonfirmasi</div>
									<?php }else{?>
										<div class="badge badge-warning">Ditolak</div>
									<?php }	?>
								</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-flat">Opsi</button>
                                        <button
                                            type="button"
                                            class="btn btn-success btn-flat dropdown-toggle dropdown-icon"
                                            data-toggle="dropdown">
                                            <span class="sr-only">Opsi</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="<?= base_url('backend/pendaftaran/konfirmasi/').$p->id_santri.'/terima'?>">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                Terima</a>
                                            <a class="dropdown-item" href="<?= base_url('backend/pendaftaran/konfirmasi/').$p->id_santri.'/tolak'?>">
                                                <i class="fas fa-times"></i>
                                                Tolak</a>
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


<?php 
include 'modal.php';
$this->load->view('backend/komponen/footer');

?>
