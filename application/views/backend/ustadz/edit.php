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
            <h1>Tambah Data Ustadz</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>dashboard/berita">Ustadz</a></li>
              <li class="breadcrumb-item active">Tambah Data Ustadz</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Form Tambah Ustadz</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Berita" required>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>No Hp/Wa</label>
                  <input type="text" name="" class="form-control" id="" placeholder="Masukan Nomer Hp atau Whatsapp">
                </div>
              </div>   
							<div class="col-md-6">
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="judul" placeholder="Masukan Tempat Lahir" required>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Pengajar</label>
                  <input type="text" class="form-control" name="" id="" placeholder="Masukan Nama Pengajar">
                </div>
              </div>    
            </div>
			<!-- /.col -->
				<div class="form-group">
				<label for="">Foto</label>
				<input type="file" class="form-control" name="">
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Simpan">
			</div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          </div>
        </div>
        <!-- /.card -->
	  </div>
	</section>
 </div>
 
<?php 

$this->load->view('backend/komponen/footer');

?>
