<?php include 'komponen/header.php'; include 'komponen/navbar.php'?>

<!--====== Header End ======-->
<section class="page-header" style="background: url(<?= base_url('assets/frontend/images/bg-kajian.jpeg')?>);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-8">
          <div class="title-block">
            <h1>Santri Nur Baiturrahman</h1>
            <ul class="header-bradcrumb justify-content-center">
              <li><a href="<?= base_url()?>">Home</a></li>
              <li class="active" aria-current="page">Santri</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="section-instructors section-padding">
    <div class="container">
        <div class="row">
		<?php foreach ($santri as $s) {?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mb-5">
                    <div class="team-img">
                        <img src="<?= base_url()?>uploads/santri/<?= $s->foto?>" alt="" class="img-fluid">
        
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4><?= $s->nama?></h4>
                            <p><?= $s->kampus?></p>
                        </div>
        
                        <div class="course-meta">
                            <span class="duration"><i class="far fa-user-alt"></i>Angkatan <?= $s->angkatan?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
        </div>
    </div>
</section>

<?php include 'komponen/footer.php'; ?>
