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
            <h1>Kajian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Jadwal Kajian</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
		<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Semua Jadwal Kajian.</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
									<th>No.</th>
                    <th>Nama</th>
                    <th>Ustadz</th>
                    <th>Hari</th>
                    <th>Jam</th>
										<th>Pelaksanaan</th>
										<th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
									<?php $no=1; foreach($kajian as $k):?>
                  <tr>
										<td><?= $no++?>.</td>
                    <td><?= $k->nama_kajian?></td>
                    <td><?= $k->nama?></td>
                    <td><?= $k->hari?></td>
										<td><?= $k->jam?></td>
										<td><?= $k->pelaksanaan?></td>
                    <td>
										<a href="<?= base_url()?>dashboard/kajian/edit/<?= $k->id_kajian?>" class="btn btn-primary">Edit</a>
										<a href="<?= base_url()?>dashboard/kajian/hapus/1" class="btn btn-danger">Hapus</a>
									</td>
                  </tr>

									<?php endforeach;?>
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
