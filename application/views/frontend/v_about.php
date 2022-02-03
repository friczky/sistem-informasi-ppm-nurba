<?php

$this->load->view('frontend/komponen/header');
$this->load->view('frontend/komponen/navbar');

?>
<!-- konten -->

<br><br>
<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>Tentang <strong class="yellow">PPM Nur Baiturrahman</strong></h2>
          <p> orem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, assumenda, vo
          luptatum. Libero eligendi molestias iure error animi totam laudantium, aspernatur similique id eos at consectetur illo culpa,  </p>
          <a href="Javascript:void(0)">Read more</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="<?= base_url()?>assets/frontend/images/about.jpg" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->



<?php $this->load->view('frontend/komponen/footer')?>
