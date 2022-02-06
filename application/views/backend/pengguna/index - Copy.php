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
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Santri</li>
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
                <h3 class="card-title">Semua Data Santri.</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
										<th>No.</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>No Hp</th>
										<th>Kampus</th>
										<th>Angkatan</th>
										<th>Foto</th>
										<th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
										<td>1.</td>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
										<td>Internet
                      Explorer 4.0
                    </td>
										<td>Internet
                      Explorer 4.0
                    </td>
										<td>Internet
                      Explorer 4.0
                    </td>
										<td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td>
						<a href="<?= base_url()?>dashboard/santri/edit/1" class="btn btn-primary">Edit</a>
						<a href="<?= base_url()?>dashboard/santri/hapus/1" class="btn btn-danger">Hapus</a>
					</td>
                  </tr>
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
