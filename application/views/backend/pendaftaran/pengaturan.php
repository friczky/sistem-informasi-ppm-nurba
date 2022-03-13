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
              <?= form_open_multipart('backend/pendaftaran/berkas')?>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
											<?php if($berkas['status'] == '1'){ ?>
												<a href="<?= base_url()?>dashboard/pendaftaran/status/nonaktif" class="btn btn-primary"><i class="fa fa-toggle-on" ></i> Aktif</a>
											<?php }else{ ?>
												<a href="<?= base_url()?>dashboard/pendaftaran/status/aktif" class="btn btn-secondary"><i class="fa fa-toggle-off" ></i> Non Aktif</a>
											<?php }?>
										</div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Poster</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="poster" id="">
											<input type="hidden" name="poster_lama" value="<?= $berkas['poster']?>">
                    </div>
                  </div>
									<div class="form-group row">
                    <label for="" name="formulir" class="col-sm-2 col-form-label">Formulir Pendaftaran</label>
                    <div class="col-sm-10">
                      <input type="file" name="formulir" class="form-control" id="">
											<input type="hidden" name="formulir_lama" value="<?= $berkas['formulir']?>">
                    </div>
                  </div>
									<div class="form-group row">
                    <label for="" name="formulir" class="col-sm-2 col-form-label">Aksi</label>
                    <div class="col-sm-10">
										<button class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </form>
							<hr>
								<table class="table">
									<th>No.</th>
									<th>Nama</th>
									<th>File</th>
									<tr>
										<td>1</td>
										<td>Poster</td>
										<td><a href="<?= base_url()?>uploads/pendaftar/<?= $berkas['poster']?>">Lihat</a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>File Pendaftaran</td>
										<td><a href="<?= base_url()?>uploads/pendaftar/<?= $berkas['formulir']?>">Lihat</a></td>
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
