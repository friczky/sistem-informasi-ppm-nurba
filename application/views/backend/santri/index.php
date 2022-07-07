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
						<div class="col-sm-6 text-right">
						<a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle"></i> Import Data (Excel)</a>
				<a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModaldelete"><i class="fa fa-trash"></i> Reset Semua Data</a></div>
					</div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?= $this->session->flashdata('sukses')?>
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nama Wali</th>
                                <th>Kampus</th>
                                <th>Angkatan</th>
                                <th>Data Lengkap</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($santri as $s): ?>
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $s->nama?></td>
                                <td><?= $s->nama_wali?></td>
                                <td><?= $s->kampus?></td>
                                <td><?= $s->angkatan?></td>
                                <td><a href="" class="badge badge-primary">Klik Disni</a></td>
                                <td>
											<a
                                            href="<?= base_url()?>dashboard/santri/edit/<?= $s->id_santri?>">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                            Edit</a>
                                        <a
                                            href="#"
                                            data-toggle="modal"
                                            data-target="#hapus<?= $s->id_santri?>">
                                            <i class="fas fa-trash"></i>
                                            Hapus</a>

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


<!-- Modal Import -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Data Santri ( Excel )</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('excel/import');?>
			<div class="form-group">
				<label for="exampleInputFile">File Excel</label>
				<input type="file" class="form-control" id="exampleInputFile" name="excel">
			</div>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" >Import</button>
		<? form_close();?>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="exampleModaldelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reset Data Santri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
			<h3>Apakah ingin mereset semua data santri ?</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
       <a href="<?= base_url()?>excel/reset" class="btn btn-danger">Ya</a>
		
      </div>
    </div>
  </div>
</div>

<?php 

$this->load->view('backend/komponen/footer');

?>
