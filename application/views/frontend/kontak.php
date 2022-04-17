<?php include 'komponen/header.php'; include 'komponen/navbar.php' ?>


<section class="page-header" style="background: url(<?= base_url('assets/frontend/images/bg-kajian.jpeg')?>);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-8">
          <div class="title-block">
            <h1>Kontak</h1>
            <ul class="header-bradcrumb justify-content-center">
              <li><a href="index.html">Home</a></li>
              <li class="active" aria-current="page">Kontak</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>



<!-- Contact section start -->
<section class="contact section-padding">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12 col-lg-12">
               <div class="contact-info-wrapper mb-12 mb-lg-0">
                   <h3>Ingin bertanya tentang <?= $tentang['nama_ppm']?>? 
                       
                   </h3>
                   <p>Dapat melalui beberapa kontak di bawah ini ya.</p>

                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <h5><?= $tentang['email']?></h5>
                    </div>

                    <div class="contact-item">
                        <i class="fa fa-phone-alt"></i>
                        <h5><?= $tentang['telpon']?></h5>
                    </div>

                    <div class="contact-item">
                        <i class="fa fa-map-marker"></i>
                        <h5>PPM NUR BAITURRAHMAN </h5>
                    </div>
               </div>
            </div>

            
        </div>
    </div>
</section>
<!-- Contact section End -->

<!-- Map section start -->
<section class="map">
    <div id="map"></div>
 </section>
 <!-- Map section End -->

<?php include 'komponen/footer.php'?>
