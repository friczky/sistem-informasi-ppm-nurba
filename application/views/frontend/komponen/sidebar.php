<div class="blog-sidebar mt-5 mt-lg-0">
    <div class="widget widget-search">
        <form role="search" class="search-form">
            <input type="text" class="form-control" placeholder="Cari Artikel">
            <button type="submit" class="search-submit">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>

    <div class="widget widget_latest_post">
        <h4 class="widget-title">Berita Terbaru</h4>
        <div class="recent-posts">
            <?php foreach($berita as $b) {?>
            <div class="single-latest-post">
                <div class="widget-thumb">
                    <a href="<?= base_url('baca/').$b->slug?>"><img src="<?= base_url('uploads/berita/').$b->foto?>" alt="" class="img-fluid"></a>
                </div>
                <div class="widget-content">
                    <h5>
                        <a href="blog-single.html">Custom Platform for an Audit Insurance</a>
                    </h5>
                    <span>
                        <i class="fa fa-calendar-times"></i>10 april 2021</span>
                </div>
            </div>
            <?php }?>

        </div>
    </div>

    <div class="widget widget_categories">
        <h4 class="widget-title">Kategori</h4>
        <ul>
            <?php foreach($kategori as $k) {?>
            <li class="cat-item">
                <a href="#"><?= $k->kategori?></a>(<?= $jumlah = $this->db->where('id_kategori',$k->id_kategori)->count_all_results('tb_berita')?>)</li>
            <?php }?>
        </ul>
    </div>

</div>

<!-- <div class="widget widget_tag_cloud"> <h4 class="widget-title">Tags</h4> <a
href="#">Design</a> <a href="#">Development</a> <a href="#">UX</a> <a
href="#">Marketing</a> <a href="#">Tips</a> <a href="#">Tricks</a> <a
href="#">Ui</a> <a href="#">Free</a> <a href="#">Wordpress</a> <a
href="#">bootstrap</a> <a href="#">Tutorial</a> <a href="#">Html</a> </div> -->
