<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1><?= lang('UKM.hero_title') ?></h1>
      <h2><?= lang('UKM.hero_subtitle') ?></h2>
      <a href="#portfolio" class="btn-get-started"><?= lang('UKM.hero_cta') ?></a>
    </div>
  </section>

  <main id="main">
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title"><?= lang('UKM.gallery_title') ?></h3><br>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active"><?= lang('UKM.gallery_filter_all') ?></li>
              <li data-filter=".filter-tari"><?= lang('UKM.gallery_filter_dance') ?></li>
              <li data-filter=".filter-taekwondo"><?= lang('UKM.gallery_filter_taekwondo') ?></li>
              <li data-filter=".filter-musik"><?= lang('UKM.gallery_filter_music') ?></li>
              <li data-filter=".filter-basket"><?= lang('UKM.gallery_filter_basketball') ?></li>
              <li data-filter=".filter-tenis"><?= lang('UKM.gallery_filter_table_tennis') ?></li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-tari">
            <img src="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2021/12/buwaca-satwika.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= lang('UKM.gallery_img_title', ['name' => 'TARI']) ?></h4>
              <p><?= lang('UKM.gallery_img_desc', ['name' => 'TARI']) ?></p>
              <a href="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2021/12/buwaca-satwika.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= lang('UKM.gallery_img_title', ['name' => 'TARI']) ?>"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-taekwondo">
            <img src="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2021/12/dokumentasi1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= lang('UKM.gallery_img_title', ['name' => 'TAEKWONDO']) ?></h4>
              <p><?= lang('UKM.gallery_img_desc', ['name' => 'TAEKWONDO']) ?></p>
              <a href="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2021/12/dokumentasi1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= lang('UKM.gallery_img_title', ['name' => 'TAEKWONDO']) ?>"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-taekwondo">
            <img src="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2021/12/dokumentasi-2-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= lang('UKM.gallery_img_title', ['name' => 'TAEKWONDO']) ?></h4>
              <p><?= lang('UKM.gallery_img_desc', ['name' => 'TAEKWONDO']) ?></p>
              <a href="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2021/12/dokumentasi-2-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= lang('UKM.gallery_img_title', ['name' => 'TAEKWONDO']) ?>"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-taekwondo">
            <img src="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2020/01/dokumentasi-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= lang('UKM.gallery_img_title', ['name' => 'TAEKWONDO']) ?></h4>
              <p><?= lang('UKM.gallery_img_desc', ['name' => 'TAEKWONDO']) ?></p>
              <a href="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2020/01/dokumentasi-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= lang('UKM.gallery_img_title', ['name' => 'TAEKWONDO']) ?>"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-musik">
            <img src="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2021/12/dokumentasi.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= lang('UKM.gallery_img_title', ['name' => 'MUSIK']) ?></h4>
              <p><?= lang('UKM.gallery_img_desc', ['name' => 'MUSIK']) ?></p>
              <a href="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2021/12/dokumentasi.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= lang('UKM.gallery_img_title', ['name' => 'MUSIK']) ?>"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-basket">
            <img src="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2021/12/Screenshot-2021-12-03-at-08-18-48-PENS-BASKETBALL-on-Instagram-%E2%80%9C1-November-2018-Telah-dilaksanakan-sparing-melawan-basket....png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= lang('UKM.gallery_img_title', ['name' => 'BASKET']) ?></h4>
              <p><?= lang('UKM.gallery_img_desc', ['name' => 'BASKET']) ?></p>
              <a href="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2021/12/Screenshot-2021-12-03-at-08-18-48-PENS-BASKETBALL-on-Instagram-%E2%80%9C1-November-2018-Telah-dilaksanakan-sparing-melawan-basket....png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= lang('UKM.gallery_img_title', ['name' => 'BASKET']) ?>"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-basket">
            <img src="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2021/12/Screenshot-2021-12-03-at-08-19-32-PENS-BASKETBALL-on-Instagram-%E2%80%9CRepost-azzlamri-get_repost-%E3%83%BB%E3%83%BB%E3%83%BB-Kita-telah-berjuang-Mba....jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= lang('UKM.gallery_img_title', ['name' => 'BASKET']) ?></h4>
              <p><?= lang('UKM.gallery_img_desc', ['name' => 'BASKET']) ?></p>
              <a href="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2021/12/Screenshot-2021-12-03-at-08-19-32-PENS-BASKETBALL-on-Instagram-%E2%80%9CRepost-azzlamri-get_repost-%E3%83%BB%E3%83%83%E3%83%BB-Kita-telah-berjuang-Mba....jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= lang('UKM.gallery_img_title', ['name' => 'BASKET']) ?>"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tenis">
            <img src="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2020/01/Tenis-Meja.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= lang('UKM.gallery_img_title', ['name' => 'TENIS MEJA']) ?></h4>
              <p><?= lang('UKM.gallery_img_desc', ['name' => 'TENIS MEJA']) ?></p>
              <a href="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2020/01/Tenis-Meja.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= lang('UKM.gallery_img_title', ['name' => 'TENIS MEJA']) ?>"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tenis">
            <img src="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2020/01/Tenis-Meja-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= lang('UKM.gallery_img_title', ['name' => 'TENIS MEJA']) ?></h4>
              <p><?= lang('UKM.gallery_img_desc', ['name' => 'TENIS MEJA']) ?></p>
              <a href="https://kemahasiswaan.pens.ac.id/wp-content/uploads/2020/01/Tenis-Meja-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= lang('UKM.gallery_img_title', ['name' => 'TENIS MEJA']) ?>"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

      </div>
    </section>
  </main>
<?= $this->endSection() ?>
