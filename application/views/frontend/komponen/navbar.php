<header class="header-style-1">
    <div class="header-topbar topbar-style-2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 col-md-12">
                   <div class="header-contact text-center text-lg-start d-none d-sm-block">
                       <?php $data = $this->db->where('id_sistem', 1)->get('tb_sistem')->row_array(); ?>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <span class="text-color me-2"><i class="fa fa-phone-alt"></i></span><a href="tel:<?= $data['telpon']?>" > <?= $data['telpon']?></a>
                            </li>

                            <li class="list-inline-item">
                                <span class="text-color me-2"><i class="fa fa-envelope"></i></span><a href="malito:<?= $data['email']?>"> <?= $data['email']?></a>
                            </li>
                        </ul>
                   </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12">
                   <div class="d-sm-flex justify-content-center justify-content-lg-end">
                        <div class="header-socials text-center text-lg-end">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="<?= $data['facebook']?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="<?= $data['instagram']?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="<?= $data['youtube']?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>

                        <div class="header-btn text-center text-lg-end">
                           <a href="<?= base_url('login')?>" target="_blank"> <i class="fa fa-user-alt"></i> Masuk/Daftar</a>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-navbar navbar-sticky">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="site-logo">
                    <a href="<?= base_url()?>">
                        <img src="<?= base_url()?>uploads/sistem/<?php $data = $this->db->get('tb_sistem')->row_array(); echo $data['logo']?> " alt="" class="img-fluid" />
                    </a>
                </div>

                <div class="offcanvas-icon d-block d-lg-none">
                    <a href="#" class="nav-toggler"><i class="fal fa-bars"></i></a>
                </div>

                <div class="header-category-menu d-none d-xl-block">
                    <ul>
                        <li class="has-submenu">
                            <a href="#"><i class="fa fa-th me-2"></i>Kategori</a>
                            <ul class="submenu">
								<?php $kategori = $this->db->order_by('id_kategori','DESC')->get('tb_kategori')->result() ;foreach($kategori as $k){ ?>
                                <li><a href="<?= base_url('kategori/').$k->id_kategori,'/'.$k->kategori ?>"><?= $k->kategori?></a></li>
								<?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="header-search-bar d-none d-xl-block ms-4">
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Cari Artikel" >
                        <a href="#" class="search-submit"><i class="far fa-search"></i></a>
                    </form>
                 </div>

                <nav class="site-navbar ms-auto">

                    <ul class="primary-menu">
                        <li class="current">
                            <a href="<?= base_url('home')?>">Home</a>
                        </li>
                        <li><a href="<?= base_url('berita')?>">Berita</a></li>
                        <li><a href="<?= base_url('kajian')?>">Kajian</a></li>
                        <li><a href="<?= base_url('ustadz')?>">Ustadz</a></li>
                        <li><a href="<?= base_url('mahasantri')?>">Mahasantri</a></li>
                        <li><a href="<?= base_url('tentang')?>">Tentang</a></li>
                        <li><a href="<?= base_url('kontak')?>">Kontak</a></li>
                    </ul>
                    <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                </nav>
            </div>
        </div>
    </div>
</header>
<!--====== Header End ======-->
