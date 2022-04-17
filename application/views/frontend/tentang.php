<?php include 'komponen/header.php'; include 'komponen/navbar.php' ?>


<section class="page-header" style="background: url(<?= base_url('assets/frontend/images/bg-kajian.jpeg')?>);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-8">
          <div class="title-block">
            <h1>Tentang</h1>
            <ul class="header-bradcrumb justify-content-center">
              <li><a href="index.html">Home</a></li>
              <li class="active" aria-current="page">Tentang</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- About Section Start -->
<section class="about-3 section-padding">
    <div class="container">
        <div class="row ">
            <div class="col-xl-5 col-lg-6 align-items-center justify-content-between">
                <div class="about-img">
                    <img src="<?= base_url()?>assets/frontend/images/banner/img_9.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               
                    <?= $tentang['tentang']?>
				
            </div>
        </div>
    </div>
</section>


<?php include 'komponen/footer.php'?>
