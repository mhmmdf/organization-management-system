<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1><?= lang('UKM.hero_title') ?></h1>
      <h2><?= lang('UKM.hero_subtitle') ?></h2>
      <a href="#about" class="btn-get-started"><?= lang('UKM.hero_cta') ?></a>
    </div>
  </section>

  <main id="main">
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title"><?= lang('UKM.section_ukt_title') ?></h2>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-flower1"></i></div>
              <h4 class="title"><?= lang('UKM.ukt_dance_title') ?></h4>
              <p class="description" style="text-align: justify;"><?= lang('UKM.ukt_dance_desc') ?></p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-universal-access"></i></div>
              <h4 class="title"><?= lang('UKM.ukt_taekwondo_title') ?></h4>
              <p class="description" style="text-align: justify;"><?= lang('UKM.ukt_taekwondo_desc') ?></p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-music-note-beamed"></i></div>
              <h4 class="title"><?= lang('UKM.ukt_music_title') ?></h4>
              <p class="description" style="text-align: justify;"><?= lang('UKM.ukt_music_desc') ?></p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-circle-fill"></i></div>
              <h4 class="title"><?= lang('UKM.ukt_basketball_title') ?></h4>
              <p class="description" style="text-align: justify;"><?= lang('UKM.ukt_basketball_desc') ?></p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
              <div class="icon"><i class="bi bi-input-cursor"></i></div>
              <h4 class="title"><?= lang('UKM.ukt_table_tennis_title') ?></h4>
              <p class="description" style="text-align: justify;"><?= lang('UKM.ukt_table_tennis_desc') ?></p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100"></div>
        </div>

      </div>
    </section>
  </main>
<?= $this->endSection() ?>
