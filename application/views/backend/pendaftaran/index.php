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
              <li class="breadcrumb-item"><a href="#">Pendaftaran</a></li>
              <li class="breadcrumb-item active">Data Pendaftar</li>
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
                <h3 class="card-title">Semua Data Pendaftar.</h3>
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
										<th>Semester</th>
										<th>Foto</th>
										<th>Berkas Pendaftaran</th>
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
										<td><a href="#" class="badge badge-info" data-toggle="modal" data-target="#berkas">Klik Disini</a></td>
                    <td>
										<div class="btn-group">
                    <button type="button" class="btn btn-success btn-flat">Opsi</button>
                    <button type="button" class="btn btn-success btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#"><i class="fa fa-check" aria-hidden="true"></i> Terima</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-cross    "></i> Tolak</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-edit    "></i> Edit</a>
											<a class="dropdown-item" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
                    </div>
                  </div>
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
										<td><a href=""><i class="fa fa-download" aria-hidden="true"></i></i> Download</a></td>
									</tr>
								</tbody>
							</table>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



<?php 

$this->load->view('backend/komponen/footer');

?>
