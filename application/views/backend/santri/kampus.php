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
            <h1>Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>dashboard/berita">Berita</a></li>
              <li class="breadcrumb-item active">Kategori</li>
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
            <h3 class="card-title">Form Kategori</h3>

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
						<?= $this->session->flashdata('sukses')?>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
									<form action="<?= base_url()?>backend/santri/kampus" method="post" enctype="multipart/form-data">
                  <label>Nama Kampus</label>
                  <input type="text" class="form-control" name="nama_kampus" placeholder="Masukan Nama Kampus" value="<?= $this->session->flashdata('nama_kampus')?>" required>
										<br>
										<label>Logo Kampus</label>
                  <input type="file" class="form-control" name="logo_kampus" >
									<input type="hidden" name="logo_lama" value="<?= $this->session->flashdata('logo_lama')?>">
									<input type="hidden" name="id_kampus"  value="<?= $this->session->flashdata('id_kampus')?>">
										<br>
									<?php 
									if ($this->session->flashdata('id_kampus')) {
										echo '<input type="submit" class="btn btn-primary" name="update" value="Perbahrui">';
									} else	{
										echo '<input type="submit" class="btn btn-primary" name="simpan" value="Tambah">';
									}

									 ?>
									</form> 
                </div>
                <!-- /.form-group -->
              </div>

              <!-- /.col -->
              <div class="col-md-9">
                <div class="form-group">
                  <label>Data Kategori</label>
                  <table id="example1" class="table table-bordered table-striped">
					  <thead>
					  <th>ID Kampus</th>
					  <th>Nama Kampus</th>
					  <th>Logo</th>
					  <th>Aksi</th>
					  </thead>
						<?php $no =1 ; foreach ($kampus as $key => $k) { ?>
					  <tr>
						<form action="<?= base_url()?>backend/santri/kampus" method="post">
						  <td align="center"><?= $k->id_kampus?></td>
						  <td><?= $k->nama_kampus?></td>
						  <td><img src="<?= base_url()?>uploads/kampus/<?= $k->logo_kampus?>" width="50px" alt=""></td>
						  <td>
							<input type="hidden" name="id_kampus" value="<?= $k->id_kampus?>">
						  <input type="submit" class="btn btn-primary" name="edit" value="Edit">
							<input type="submit" class="btn btn-danger" name="hapus" value="Hapus">
						  </td>
							</form>
					  </tr>
						<?php } ?>
				  </table>
                </div>
              </div>   
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
