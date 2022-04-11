<?php $this->load->view('frontend/komponen/header'); ?>
<?php $this->load->view('frontend/komponen/navbar'); ?>

<!-- Banner Section Start -->
<section class="banner-style-4 banner-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-xl-6 col-lg-6">
                <div class="banner-content ">
                    <span class="subheading">Assalamualaikum Warahmatulahi Wabarokatuh.</span>
                    <h1>Kulian sambil Mondok di PPM Nur Baiturrahman</h1>
                    <p class="mb-40"> Mendapatkan Ilmu dunia dan Akhirat secara bersama ? Tentu bisa dong , Mari bergabung di Pondok Pesantren Nur Baiturrahman</p>

                    <div class="btn-container">
                        <a href="<?= base_url()?>tentang" class="btn btn-main rounded">Tentang PPM</a>
                        <a href="<?= base_url()?>daftar" class="btn btn-white rounded ms-2">Mendaftar </a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6 col-lg-6">
                <div class="banner-img-round mt-5 mt-lg-0 ps-5">
                    <img src="<?= base_url()?>assets/frontend/images/banner/banner_img.png" alt="" class="img-fluid">
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
<!-- Banner Section End -->

<!-- Counter Section start -->
<section class="counter-section4">
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-xl-12 counter-inner">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0">
                            <div class="count">
                                <span class="counter h2"><?= $this->db->count_all('tb_ustadz')?></span>
                            </div>
                            <p>Ustadz Pengajar</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0">
                            <div class="count">
                                <span class="counter h2"><?= $this->db->count_all('tb_santri')?></span>
                            </div>
                            <p>Mahasantri</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0">
                            <div class="count">
                                <span class="counter h2"><?= $this->db->count_all('tb_kajian')?></span>
                            </div>
                            <p>Materi Yang Kajian</p>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</section>
<!-- COunter Section End -->

<!--  Course category -->
<section class="counter-section4 section-padding">
    <div class="container">
		
        <div class="row mb-70 justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading text-center">
                <br>
                    <h2 class="font-lg">Materi Kajian</h2>
                    <!-- <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam</p> -->
                </div>
            </div>
        </div>

        <div class="row">
		<?php foreach($kajian as $kajian) : ?>
            <div class="col-xl  col-sm-6">
                <div class="single-course-category style-3 bg-5">
                    <div class="course-cat-icon">
                        <img src="<?= base_url()?>uploads/sistem/quran.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                           <?= substr($kajian->nama_kajian,0,13)?>
                        </h4>
                    </div>
                </div>
            </div>
		<?php endforeach; ?>
        </div>
    </div>
</section>
<!--  Course category End -->
<!-- Work Process Section Start -->
<section class="work-process section-padding">
    <div class="container">
        <div class="row mb-40">
            <div class="col-xl-8">
                <div class="section-heading ">
                    <h2 class="font-lg">Fasilitas PPM NUR Baiturrahman</h2>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-xl-7 pe-xl-5 col-lg-12">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="step-item ">
                            <div class="step-number bg-1">01</div>
                            <div class="step-text">
                                <h5>Kamar</h5>
                                <p>Lorem ipsum dolor seat ameat dui too consecteture elite adipaising.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="step-item">
                            <div class="step-number bg-2">02</div>
                            <div class="step-text">
                                <h5>Lemari</h5>
                                <p>Lorem ipsum dolor seat ameat dui too consecteture elite adipaising.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 ">
                        <div class="step-item">
                            <div class="step-number bg-3">03</div>
                            <div class="step-text">
                                <h5>Wi-Fi </h5>
                                <p>Lorem ipsum dolor seat ameat dui too consecteture elite adipaising.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="step-item">
                            <div class="step-number bg-1">04</div>
                            <div class="step-text">
                                <h5>Toilet 8 Pintu</h5>
                                <p>Lorem ipsum dolor seat ameat dui too consecteture elite adipaising.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-xl-5">
                <div class="video-section mt-3 mt-xl-0">
                    <div class="video-content">
                        <img src="<?= base_url()?>assets/frontend/images/bg/office01.jpg" alt="" class="img-fluid">
                        <a href="#" class="video-icon video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Work Process Section End -->
<!--  Course style 1 -->

<section class="course-wrapper section-padding  bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading mb-70 text-center">
                    <h2 class="font-lg">Berita Terbaru</h2>
                    <p>Discover Your Perfect Program In Our Courses.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-lg-center">

			 <?php foreach ($berita as $b) { ?>

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="<?= base_url()?>uploads/berita/<?= $b->foto?>" alt="" width="340px" height="223" class="img">
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <!-- <span>3.9 (30 reviews)</span> -->
                        </div>
                        <h3 class="course-title mb-20"> <a href="<?= base_url()?>baca/<?= $b->slug?>"><?= $b->judul ?></a> </h3>
                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            
                            <span class="lessons"><i class="far fa-user me-2"></i><?php $user = $this->db->where('id_pengguna',$b->id_user)->get('tb_pengguna')->row_array(); if ($user > 1){ echo $user['nama']; } else { echo "Anonymous" ;}?></span>
                        </div>
                    </div>
                </div>
             </div>
            <!-- COURSE END -->
			<?php } ?>

        </div>
    </div>
</section>

<!--  Course style 1 End -->



<!-- Feature section start -->
<section class="features-3 section-padding-top ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading mb-50 text-center">
                    <h2 class="font-lg">Transform Your Life </h2>
                    <p>Discover Your Perfect Program In Our Courses.</p>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6">
                <div class="feature-item feature-style-top hover-shadow rounded border-0">
                    <div class="feature-icon">
                        <i class="flaticon-teacher"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Expert Teacher</h4>
                        <p>Develop skills for career of various majors including computer</p>
                    </div>
                </div>
            </div>
             <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6">
                <div class="feature-item feature-style-top hover-shadow rounded border-0">
                    <div class="feature-icon">
                        <i class="flaticon-layer"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Self Development</h4>
                        <p>Develop skills for career of various majors including computer.</p>
                    </div>
                </div>
            </div>
             <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6">
                <div class="feature-item feature-style-top hover-shadow rounded border-0">
                    <div class="feature-icon">
                        <i class="flaticon-video-camera"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Remote Learning</h4>
                        <p>Develop skills for career of various majors including language</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6">
                <div class="feature-item feature-style-top hover-shadow rounded border-0">
                    <div class="feature-icon">
                        <i class="flaticon-lifesaver"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Life Time Support</h4>
                        <p>Develop skills for career of various majors including language  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature section End -->
<!-- Team section start -->
<section class="team section-padding">
    <div class="container">
        <div class="row  mb-100">
            <div class="col-lg-8 col-xl-8">
                <div class="section-heading text-center text-lg-start">
                    <h2 class="font-lg">Ustadz Yang Mengajar</h2>
                    <p>Ustadz yang mengajar memiliki ilmu yang berlimpah untuk kita pelajari.</p>
                </div>
            </div>

             <div class="col-xl-4 col-lg-4">
                <div class="text-center text-lg-end">
                    <a href="<?= base_url()?>ustadz" class="btn btn-main-outline rounded">Semua Ustadz <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
			<?php foreach ($ustadz as $u) { ?>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="team-item team-item-4 mb-70 mb-xl-0">
                    <div class="team-img">
					<img src="<?php if ($u->foto == ''){?><?= base_url()?>uploads/ustadz/default.png <?php }else{?><?= base_url()?>uploads/ustadz/<?= $u->foto ; }?>" alt="" class="img-fluid">

                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4><?= $u->nama?></h4>
                            <p>Pengajar</p>
                        </div>

                        <div class="course-meta">
						<span class="lessons"><i class="far fa-play-circle me-2"></i>Mengajar <?= $data = $this->db->where('id_ustadz',$u->id_ustadz)->count_all_results('tb_kajian')?> Materi Kajian</span>
                        </div>
                    </div>
                </div>
            </div>
			<?php } ?>
        </div>
    </div>
</section>
<!-- Team section End -->

<!-- Testimonial section start -->
<section class="testimonial-4 section-padding bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-heading text-center mb-50">
                    <h2 class="font-lg">Qoutes Santri</h2>
                    <p>Discover Your Perfect Program In Our Courses.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12 col-xl-12">
                <div class="testimonials-slides owl-carousel owl-theme">
                    <div class="testimonial-item">
                       <div class="testimonial-inner">
                           <div class="quote-icon"><i class="flaticon-left-quote"></i></div>

                            <div class="testimonial-text mb-30">
                                Cras vel purus fringilla, lobortis libero ut Proin a velit convallis, fermentum orci in, rutrum diam. Duis elementum odio a pharetra commodo.
                            </div>

                            <div class="client-info d-flex align-items-center">
                                <div class="client-img">
                                    <img src="<?= base_url()?>assets/frontend/images/clients/testimonial-avata-01.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="testimonial-author">
                                    <h4>Cory Zamora</h4>
                                    <span class="meta">Marketing Specialist</span>
                                </div>
                            </div>
                       </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-inner">
                            <div class="quote-icon"><i class="flaticon-left-quote"></i></div>

                            <div class="testimonial-text  mb-30">
                                Cras vel purus fringilla, lobortis libero ut Proin a velit convallis, fermentum orci in, rutrum diam. Duis elementum odio a pharetra commodo.
                            </div>

                            <div class="client-info d-flex align-items-center">
                                <div class="client-img">
                                    <img src="<?= base_url()?>assets/frontend/images/clients/testimonial-avata-02.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="testimonial-author">
                                    <h4>Jackie Sanders</h4>
                                    <span class="meta">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-inner">
                            <div class="quote-icon"><i class="flaticon-left-quote"></i></div>

                            <div class="testimonial-text  mb-30">
                                Cras vel purus fringilla, lobortis libero ut Proin a velit convallis, fermentum orci in, rutrum diam. Duis elementum odio a pharetra commodo.
                            </div>

                            <div class="client-info d-flex align-items-center">
                                <div class="client-img">
                                    <img src="<?= base_url()?>assets/frontend/images/clients/testimonial-avata-03.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="testimonial-author">
                                    <h4>Nikolas Brooten</h4>
                                    <span class="meta">Sales Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-inner">
                            <div class="quote-icon"><i class="flaticon-left-quote"></i></div>

                            <div class="testimonial-text mb-30">
                                Cras vel purus fringilla, lobortis libero ut Proin a velit convallis, fermentum orci in, rutrum diam. Duis elementum odio a pharetra commodo.
                            </div>

                            <div class="client-info d-flex align-items-center">
                                <div class="client-img">
                                    <img src="<?= base_url()?>assets/frontend/images/clients/testimonial-avata-04.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="testimonial-author">
                                    <h4>Terry Ambady</h4>
                                    <span class="meta">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-inner">
                            <div class="quote-icon"><i class="flaticon-left-quote"></i></div>

                            <div class="testimonial-text mb-30">
                                Cras vel purus fringilla, lobortis libero ut Proin a velit convallis, fermentum orci in, rutrum diam. Duis elementum odio a pharetra commodo.
                            </div>

                            <div class="client-info d-flex align-items-center">
                                <div class="client-img">
                                    <img src="<?= base_url()?>assets/frontend/images/clients/testimonial-avata-03.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="testimonial-author">
                                    <h4>Nikolas Brooten</h4>
                                    <span class="meta">Sales Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial section End -->
<!-- CTA Sidebar start -->
<section class="cta-5 mb--120 bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="cta-inner4">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-4 col-lg-5">
                           <div class="cta-img mb-4 mb-lg-0">
                               <img src="<?= base_url()?>assets/frontend/images/about/img_9.png" alt="" class="img-fluid">
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="cta-content ps-lg-4">
                                <span class="subheading mb-10">Not sure where to start?</span>
                                <h2 class="mb-20"> Want to know Special Offers & Updates of new courses?</h2>
                                <a href="#" class="btn btn-main rounded"> Join NOw</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Sidebar end -->

<?php $this->load->view('frontend/komponen/footer'); ?>
