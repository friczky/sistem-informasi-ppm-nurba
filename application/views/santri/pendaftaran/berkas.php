<?php 

$this->load->view('santri/komponen/header');
$this->load->view('santri/komponen/navbar');
$this->load->view('santri/komponen/sidebar-santri');

?>

<!-- Konten -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Berkas Pendaftaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Pendaftaran</a>
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
                    <h3 class="card-title">Upload Berkas Pendaftaran Disini.</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
					<?= $this->session->flashdata('sukses');?>
                    <form action="<?= base_url()?>santri/pendaftaran/update_berkas" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Formulir Pendaftaran</label>
                            <div class="col-sm-10">
                                <input
                                    type="file"
                                    class="form-control"
                                    name="formulir"
                                    value=""
                                    id="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Surat Izin Orang Tua</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="surat_izin" value="" id="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Aksi</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="id_berkas" value="<?= $berkas['id_berkas']?>">
								<input type="hidden" name="formulir_lama" value="<?= $berkas['formulir']?>" >
								<input type="hidden" name="surat_lama" value="<?= $berkas['surat_izin']?>" >
                                <input type="submit" class="btn btn-primary" name="simpan" value="<?php if($berkas['formulir'] == null){ echo 'Upload'; }else{ echo 'Update'; }?>" id="">
                            </div>
                        </div>
                    </form>
                    <hr>
					<table class="table"  border="1">
						<tr>
							<td>Formulir Pendaftaran</td>
							<td>
								<?php if($berkas['formulir'] == null) {?>
									Belum Di Upload
								<?php } else {?>
								<a href="<?= base_url()?>uploads/pendaftar/<?= $berkas['formulir']?>">Download</a>
								<?php }?>
							</td>
						</tr>
						<tr>
							<td>Surat Izin Orang Tua</td>
							<td>
							<?php if($berkas['surat_izin'] == null){?>
									Belum Di Upload
								<?php }else {?>
								<a href="<?= base_url()?>uploads/pendaftar/<?= $berkas['surat_izin']?>">Download</a>
								<?php }?>
							</td>
						</tr>
					</table>

                </div>
            </div>
        </div>
    </div>
</section>
<?php 
$this->load->view('santri/komponen/footer');
?>

