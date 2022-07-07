<?php 

$this->load->view('santri/komponen/header');
$this->load->view('santri/komponen/navbar');
$this->load->view('santri/komponen/sidebar-santri');

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Selamat Datang <b><?= $user['nama']?></b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
		<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img
                                    class="profile-user-img img-fluid img-circle"
                                    src="<?= base_url()?>uploads/santri/<?php if($user['foto'] == null){ echo 'default.png';} else{ echo $user['foto'] ; }?>  "
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $user['nama']?></h3>

                            <p class="text-muted text-center">Administrator</p>

                            <ul class="list-group  mb-3">
                                <li class="list-group-item">
                                    <b>Artikel</b>
                                    <a class="float-right"><?= $artikel ?></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        
                        <!-- /.card-header -->
                        <div class="card-body">
												<?= $this->session->flashdata('alert');?>
                            <div class="tab-content">
                                <div class="active tab-pane" id="biodata">
                                    <form class="form-horizontal" action="<?= base_url()?>santri/profile/update" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <b><?= $user['nama']?></b>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Status Santri</label>
                                            <div class="col-sm-10">
                                                <?php 
													if($user['status_santri'] == '1'){
														echo '<b><div class="badge badge-info">Belum Di Konfirmasi.</div></b>';
													}elseif($user['status_santri'] == '2'){
														echo '<b><div class="badge badge-danger">Pendaftaran Belum Diterima.</div></b>';
													}else{
														echo '<b><div class="badge badge-success"> Sudah Menjadi Santri </div></b>';
													}
												?>
                                            </div>
                                        </div>
                                      
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="password">
                                    <form class="form-horizontal" action="<?= base_url()?>santri/profile/password" method="post">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Password Baru</label>
                                            <div class="col-sm-10">
												<input
                                                    type="password"
                                                    class="form-control"
                                                    id="inputName"
                                                    placeholder="Masukan Password Lama"  name="password_lama">	
													<br>
                                                <input
                                                    type="password"
                                                    class="form-control"
                                                    id="inputName"
                                                    placeholder="Masukan Password Baru" name="password_baru">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
		
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
<?php 
$this->load->view('santri/komponen/footer');
?>
