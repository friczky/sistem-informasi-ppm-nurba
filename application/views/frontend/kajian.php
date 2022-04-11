<?php include 'komponen/header.php'; include 'komponen/navbar.php';?>


<section class="page-header" style="background: url(<?= base_url('assets/frontend/images/bg-kajian.jpeg')?>);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-8">
          <div class="title-block">
            <h1>Jadwal Kajian</h1>
            <ul class="header-bradcrumb justify-content-center">
              <li><a href="index.html">Home</a></li>
              <li class="active" aria-current="page">Courses</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

    <!--course section start-->
    <section class="section-padding page" >
        <div class="course-top-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p>Menampilkan <?= $this->db->count_all('tb_kajian')?> daftar Kajian</p>
                    </div>
    
                    <!-- <div class="col-lg-4">
                        <div class="topbar-search">
                            <form method="get" action="#">
                                <input type="text"  placeholder="Search our courses" class="form-control">
                                <label><i class="fa fa-search"></i></label>
                            </form>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row ">

			<?php foreach($kajian as $kajian) : ?>
                <div class="course-item col-lg-3 col-md-6 col-sm-6">
                    <div class=" course-style-5 bg-white">
                        <div class="course-header">
                            <div class="course-thumb">
                                <img src="<?= base_url()?>uploads/sistem/kajian.jpg" alt="" class="img-fluid">
                                <!-- <div class="course-price">$300</div> -->
                            </div>
                        </div>
    
                        <div class="course-content">
                            <div class="course-meta meta-style-1">
                                <span class="lessons"><i class="far fa-clock me-2"></i><?= $kajian->jam?> </span>
                                <span class="label"><i class="fa fa-calendar"></i><?= $kajian->hari?></span>
                            </div>
                            <h4> <?= $kajian->nama_kajian?> </h4>
                        
                            <div class="course-footer mt-20 d-flex align-items-center justify-content-between">
                                <span class="students"><i class="far fa-user-alt me-2"></i><?php $data =$this->db->where('id_ustadz',$kajian->id_ustadz)->get('tb_ustadz')->row_array(); echo $data['nama']?></span>
                            </div>
                        </div>
                    </div>
                </div>
			<?php endforeach; ?>
    
            </div>
        </div>
        <!--course-->
    </section>
    <!--course section end-->


<?php include 'komponen/footer.php';?>
