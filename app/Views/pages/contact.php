<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1><?= lang('UKM.hero_title') ?></h1>
      <h2><?= lang('UKM.hero_subtitle') ?></h2>
      <a href="#contact" class="btn-get-started"><?= lang('UKM.hero_cta') ?></a>
    </div>
  </section>

  <main id="main">
    <section id="contact">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title"><?= lang('UKM.contact_title') ?></h3>
        </div>
        <div class="row justify-content-center">
            <center>
            <p class="section-description"><?= lang('UKM.contact_description') ?></p>
            <div class="social-links">
                <a href="https://twitter.com/unpamid" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://id-id.facebook.com/UNPAM.ID/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://wa.me/6282114076740" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                <a href="https://www.instagram.com/universitas_pamulang" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
            <p class="section-description"><?= lang('UKM.contact_address_label') ?></p>
            </center>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.370907642931!2d106.68946961413893!3d-6.3459921638518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5a6e26dc3cd%3A0xccd6344b8021119d!2sUniversitas%20Pamulang%20Kampus%202%20(UNPAM%20Viktor)!5e0!3m2!1sid!2sid!4v1671034375112!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen loading="lazy"></iframe>
      </div>
    </section>
  </main>

<?= $this->endSection() ?>
