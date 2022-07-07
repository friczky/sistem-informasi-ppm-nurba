
<!-- partial:index.partial.html -->
<div class="container h-100">
  <div class="row align-items-center h-100">
    <div class="container rounded">
      <h2 class="text-center">Kampus Yang Bergabung:</h2>
	  <br>
      <div class="slider">
        <div class="logos">
			<?php foreach($kampus as $kampus) {?>
           <i><img src="<?= base_url()?>uploads/kampus/<?= $kampus->logo_kampus ?>" style="padding-left: 10px;" width="130px" alt="<?= $kampus->nama_kampus ?>"></i>
		  <?php } ?>
        </div>
		<div class="logos" style="padding-left: -100px;">
			<?php foreach($kampus1 as $kampus){?>
           <img src="<?= base_url()?>uploads/kampus/<?= $kampus->logo_kampus ?>" width="100px"  style="padding-left: 10px;" alt="<?= $kampus->nama_kampus ?>">
		  <?php } ?>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- partial -->
  
