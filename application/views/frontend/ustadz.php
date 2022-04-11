<?php include 'komponen/header.php'; include 'komponen/navbar.php' ?>

<!--====== Header End ======-->
<section class="page-header" style="background: url(<?= base_url('assets/frontend/images/bg-kajian.jpeg')?>);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-8">
          <div class="title-block">
            <h1>Ustadz Pengajar</h1>
            <ul class="header-bradcrumb justify-content-center">
              <li><a href="index.html">Home</a></li>
              <li class="active" aria-current="page">Ustadz</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="section-instructors section-padding">
    <div class="container">
        <div class="row">
		<?php foreach($ustadz as $ustadz) : ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team-item mb-5">
                    <div class="team-img">
                        <img src="<?php if ($ustadz->foto == ''){?><?= base_url()?>uploads/ustadz/default.png <?php }else{?><?= base_url()?>uploads/ustadz/<?= $ustadz->foto ; }?>" alt="" class="img-fluid">
        
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4><?= $ustadz->nama?></h4>
                            <br>
                        </div>
                        <div class="course-meta">
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>Mengajar <?= $data = $this->db->where('id_ustadz',$ustadz->id_ustadz)->count_all_results('tb_kajian')?> Materi Kajian</span>
                        </div>
                    </div>
                </div>
            </div>
		<?php endforeach; ?>

        </div>
    </div>
</section>

<?php include 'komponen/footer.php'; ?>
