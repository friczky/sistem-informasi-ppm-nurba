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
              <li class="breadcrumb-item active">Pengaturan</li>
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
                <h3 class="card-title">Pengaturan Pendaftar.</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
				    
              <form>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
										<a href="" class="btn btn-primary"><i class="fa fa-toggle-on" ></i> Aktif</a>
										<a href="" class="btn btn-secondary"><i class="fa fa-toggle-off" ></i> Non Aktif</a>
										</div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Poster</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="">
                    </div>
                  </div>
									<div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Formulir Pendaftaran</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="">
                    </div>
                  </div>
									<div class="form-group row">
                    <button class="btn btn-primary">Simpan</button>
                    <div class="col-sm-10">
                     
                    </div>
                  </div>
                </form>

								<table class="table" border="1">
									<th>Nama</th>
									<th>File</th>
									<tr>
										<td>Poster</td>
										<td>Lihat</td>
									</tr>
									<tr>
										<td>File Pendaftaran</td>
										<td>Lihat</td>
									</tr>
								</table>
            </div>
    </div>
	  </div>
	</div>
  </section>


<?php 

$this->load->view('backend/komponen/footer');

?>
