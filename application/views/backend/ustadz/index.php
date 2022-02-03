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
                    <h1>Data Ustadz</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Ustadz</li>
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
                    <h3 class="card-title">Semua Data Ustadz.</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?= $this->session->flashdata('sukses'); ?>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($ustadz as $u): ?>
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $u->nama?></td>
                                <td><?= $u->alamat?></td>
                                <td><img src="<?= base_url()?>uploads/ustadz/<?= $u->foto?>" width="50px" alt=""></td>
                                <td>
                                    <a
                                        href="<?= base_url()?>dashboard/ustadz/edit/<?= $u->id_ustadz?>"
                                        class="btn btn-primary">Edit</a>
                                    <a
                                        href="#"
                                        data-toggle="modal"
                                        data-target="#hapus<?= $u->id_ustadz?>"
                                        class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <!-- modal hapus -->
                            <div class="modal fade" id="hapus<?= $u->id_ustadz?>">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Hapus</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Ingin menghapus ustadz :
                                            <?= $u->nama?>
                                        </div>
                                        <div class="modal-footer justify-content-end">
                                            <form action="<?= base_url()?>backend/ustadz/hapus/<?= $u->id_ustadz?>">
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
