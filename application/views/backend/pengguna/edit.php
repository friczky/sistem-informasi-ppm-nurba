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
            <h1>Tambah Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>dashboard/Pengguna">Pengguna</a></li>
              <li class="breadcrumb-item active">Tambah Pengguna</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
				<?= form_open_multipart('backend/pengguna/update')?>
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Form Tambah Pengguna</h3>

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
                  <input type="text" class="form-control" name="nama" value="<?= $pengguna['nama']?>" required>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" value="<?= $pengguna['username']?>" required>
                </div>
              </div>   
            </div>
						<div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" value="<?= $pengguna['email']?>" required re>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="username" value="<?= $pengguna["password"]?>" required>
                </div>
              </div>   
            </div>
			<!-- /.col -->
					<div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Role</label>
                  <select name="role" id="" class="form-control" required>
										<option value="<?= $pengguna['role']?>"><?= $role ?> (Saat Ini)</option>
										<option value="0">Administrator</option>
										<option value="1">Santri</option>
									</select>	
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" class="form-control" name="foto">
									<input type="hidden" name="foto_old" value="<?= $pengguna['foto']?>">
									<input type="hidden" name="id_pengguna" value="<?= $pengguna['nama']?>">
                </div>
              </div>   
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
