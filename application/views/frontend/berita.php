<?php include 'komponen/header.php'; include 'komponen/navbar.php' ?>

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
                <div class="title-block">
                    <h1>Blog Grid</h1>
                    <ul class="header-bradcrumb justify-content-center">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active" aria-current="page">blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-8">
                <div class="row">
				<?php foreach($berita as $b) {?>
                    <div class="col-xl-6">
                        <div class="blog-item mb-30">
                            <div class="post-thumb">
                                <a href="<?= base_url('baca/').$b->slug?>"><img src="<?= base_url('uploads/berita/').$b->foto;?>" alt="" width="50px" class="img-fluid"></a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <span class="post-author">by <?php $user = $this->db->where('id_pengguna',$b->id_user)->get('tb_pengguna')->row_array(); if ($user > 1){ echo $user['nama']; } else { echo "Anonymous" ;}?></span>
                                    <span class="post-date">
                                        <i class="fa fa-calendar-alt mr-2"></i><?= $b->waktu_buat?></span>
                                    <span class="post-comments">
                                        <i class="far fa-comments"></i>15
                                    </span>
                                </div>
                                <h3 class="post-title">
                                    <a href="<?= base_url('baca/').$b->slug?>"><?= $b->judul?></a>
                                </h3>

                                <p><?= substr($b->konten, 0,100)?></p>
                            </div>
                        </div>
                    </div>
					<?php }?>
                </div>

                <nav class="blog-page-navigation">
                    <ul class="pagination">
                        <li class="pagination-arrow">
                            <a href="#">
                                <i class="fa fa-angle-double-left"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a class="active" href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li class="pagination-arrow">
                            <a href="#">
                                <i class="fa fa-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4 col-xl-4">
               
				 <?php $this->load->view('frontend/komponen/sidebar')?>
        
            </div>
        </div>
    </div>
</div>

<?php include 'komponen/footer.php';?>
