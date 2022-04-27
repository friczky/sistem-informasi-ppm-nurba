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
                    <h1>Data Santri</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
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
                    <div class="col-sm-12 row">
						<div class="col-sm-6"><h3 class="card-title">Semua Data Santri.</h3></div>
						<div class="col-sm-6 text-right"><a href="" class="btn btn-primary"><i class="fa fa-upload"></i> &nbsp; Import Data</a> <a href="" class="btn btn-danger"><i class="fa fa-trash"></i> &nbsp; Hapus Data</a></div>
					</div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?= $this->session->flashdata('sukses')?>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nama Wali</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>No Hp</th>
                                <th>No Hp Wali</th>
                                <th>Kampus</th>
                                <th>Angkatan</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($santri as $s): ?>
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $s->nama?></td>
                                <td><?= $s->nama_wali?></td>
                                <td><?= $s->tempat_lahir?></td>
                                <td><?= $s->tanggal_lahir?></td>
                                <td><?= $s->telpon?></td>
                                <td><?= $s->telpon_wali?></td>
                                <td><?= $s->kampus?></td>
                                <td><?= $s->angkatan?></td>
                                <td><img src="<?= base_url()?>uploads/santri/<?= $s->foto?>" width="50px" alt=""></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-flat">Opsi</button>
                                    <button
                                        type="button"
                                        class="btn btn-primary btn-flat dropdown-toggle dropdown-icon"
                                        data-toggle="dropdown"></button>
                                    <div class="dropdown-menu" role="menu">
                                        <a
                                            class="dropdown-item"
                                            href="<?= base_url()?>dashboard/santri/edit/<?= $s->id_santri?>">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                            Edit</a>
                                        <a
                                            class="dropdown-item"
                                            href="#"
                                            data-toggle="modal"
                                            data-target="#hapus<?= $s->id_santri?>">
                                            <i class="fas fa-trash"></i>
                                            Hapus</a>
                                    </div>

                                </td>
                            </tr>
                            <!-- modal hapus -->
                            <div class="modal fade" id="hapus<?= $s->id_santri?>">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Hapus</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Ingin menghapus santri :
                                            <?= $s->nama?>
                                        </div>
                                        <div class="modal-footer justify-content-end">
                                            <form action="<?= base_url()?>backend/santri/hapus/<?= $s->id_santri?>">
                                                <button type="submit" class="btn btn-danger ">Ya</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
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

$this->load->view('backend/komponen/footer');

?>
