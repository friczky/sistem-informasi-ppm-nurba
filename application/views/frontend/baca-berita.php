<?php include 'komponen/header.php'; include 'komponen/navbar.php' ?>

<section
    class="page-header"
    style="background: url(<?= base_url('uploads/berita/').$baca['thumbnail']?>);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
                <div class="title-block">
                    <h1><?= $baca['judul']?></h1>
                    <ul class="header-bradcrumb justify-content-center">
                        <li>
                            <a href="<?= base_url()?>">Home</a>
                        </li>
                        <li class="active" aria-current="page">
                            <a href="<?= base_url('berita')?>">Berita</a>
                        </li>
                        <li class="active" aria-current="page"><?= $baca['judul']?></li>

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
                <div class="post-single">
                    <div class="post-thumb">
                        <img
                            src="<?= base_url('uploads/berita/').$baca['thumbnail']?>"
                            alt=""
                            class="img-fluid">
                    </div>

                    <div class="single-post-content">
                        <div class="post-meta">
                            <span class="post-author">by
                            <?php $user = $this->db->where('id_pengguna',$baca['id_user'])->get('tb_pengguna')->row_array(); if ($user > 1){ echo $user['nama']; } else { echo "Admin" ;}?>
                            </span>
                            <span class="post-date">
                                <i class="fa fa-calendar-alt mr-2"></i><?= $baca['waktu_buat']?></span>
                            <span class="post-comments">
                                <i class="far fa-comments"></i><?= $this->db->where('id_berita',$baca['id_berita'])->count_all_results('tb_komentar'); ?> Komentar</span>
                        </div>
                        <?= $baca['konten']?>
                    </div>

                    <!-- Share -->

                    <div
                        class="blog-footer-meta d-md-flex justify-content-between align-items-center">
                        <div class="post-tags mb-4 mb-md-0">
							<?php $data = $this->db->where('id_kategori',$baca['id_kategori'])->get('tb_kategori')->row_array() ;?>	
                            <a href="<?= base_url('kategori/')?><?= $data['id_kategori']?>/<?= $data['kategori'];?>"><?= $data['kategori'];?></a>
                        </div>

                        <!-- <div class="article-share d-md-flex align-items-center">
                            <h6>Share:
                            </h6>
                            <ul class="social-icon">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
					<div class=""></div>
                    <!-- Author -->
                    <div class="post-single-author mb-5">
                        <div class="author-img ">
                            <img src="<?= base_url()?>uploads/sistem/user.png" alt="" class="img-fluid">
                        </div>
                        <div class="author-info">
                            <h4><?php $data= $this->db->where('id_pengguna',$baca['id_user'])->get('tb_pengguna')->row_array(); echo $data['nama']?></h4>
                            <p>MAHASANTRI</p>
                        </div>
                    </div>

                    <!-- Comment start -->
                    <div class="comments common-form">
                        <h3 class="title"><?= $this->db->where('id_berita',$baca['id_berita'])->count_all_results('tb_komentar'); ?> Komentar</h3>
						<?php $komentar = $this->db->where('id_berita',$baca['id_berita'])->get('tb_komentar')->result(); foreach ($komentar as $komen) { ?>
                        <div class="comment-box">
                            <div class="comment-avatar">
                                <img src="<?= base_url()?>uploads/sistem/user.png" class="me-3" alt="...">
                            </div>
                            <div class="comment-info">
                                <h5><?= $komen->nama?></h5>
                                <span><?= $komen->waktu_buat?></span>
                                <p>
                                    <?= $komen->komentar?>
                                </p>
                            </div>
                        </div>
						<?php } ?>
                    </div>

                    <!-- Comment Form -->
                    <div class="comments-form common-form mt-4 ">
                        <h3 class="titile">Tulis Komentar.
                        </h3>
                        <p>Emailmu tidak akan kami publish.*</p>
                        <form action="<?= base_url()?>backend/berita/store_komentar" method="post" class="comment_form">
                            <div class="row form-row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea
                                            id="msgt"
                                            cols="30"
                                            rows="6"
                                            placeholder="Komentar" name="komentar"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
								<input type="hidden" name="id_berita" value="<?= $baca['id_berita']?>">
								<input type="hidden" name="slug" value="<?= $baca['slug']?>">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-xl-4">
                    <?php $this->load->view('frontend/komponen/sidebar')?>
            </div>
        </div>
    </div>
</div>

<?php include 'komponen/footer.php'?>
