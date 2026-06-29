<!DOCTYPE html>
<html lang="<?= service('request')->getLocale() ?>">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= lang('UKM.site_title') ?></title>
  <meta content="<?= lang('UKM.site_description') ?>" name="description">
  <meta content="UKM, universitas pamulang, unpam, student activity, mahasiswa" name="keywords">

  <link href="<?= base_url('assets/img/logo.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/logo.png') ?>" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/glightbox@3.3.1/dist/css/glightbox.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/swiper@11.1.14/swiper-bundle.min.css" rel="stylesheet">

  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

</head>

<body>
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <nav id="navbar" class="navbar">
        <ul>
          <?php $locale = service('request')->getLocale(); ?>
          <li><a class="nav-link scrollto" href="/<?= $locale ?>"><?= lang('UKM.nav_home') ?></a></li>
          <li><a class="nav-link scrollto" href="/<?= $locale ?>/gallery"><?= lang('UKM.nav_gallery') ?></a></li>
          <li><a class="nav-link scrollto" href="/<?= $locale ?>/register"><?= lang('UKM.nav_register') ?></a></li>
          <li><a class="nav-link scrollto" href="/<?= $locale ?>/contact"><?= lang('UKM.nav_contact') ?></a></li>
          <li class="dropdown">
            <a class="nav-link" data-bs-toggle="dropdown"><?= current_lang() === 'id' ? 'ID' : 'EN' ?> <i class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <?php $segments = service('uri')->getSegments(); ?>
              <li><a class="dropdown-item" href="/en/<?= implode('/', array_slice($segments, 1)) ?>"><?= lang('UKM.lang_en') ?></a></li>
              <li><a class="dropdown-item" href="/id/<?= implode('/', array_slice($segments, 1)) ?>"><?= lang('UKM.lang_id') ?></a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <div id="logo">
        <h1><a href="/<?= service('request')->getLocale() ?>">UKM Unpam <img src="<?= base_url('assets/img/logo.png') ?>" alt="" width="50px" height="50px"></a></h1>
      </div>
    </div>
  </header>

  <?= $this->renderSection('content'); ?>

  <footer id="footer">
    <div class="footer-top">
      <div class="container"></div>
    </div>

    <div class="container">
      <div class="copyright">
        <?= lang('UKM.footer_copyright') ?>
      </div>
      <div class="credits">
        <?= lang('UKM.footer_credit') ?>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="https://cdn.jsdelivr.net/npm/purecounterjs@1.2.1/dist/purecounter_vanilla.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/glightbox@3.3.1/dist/js/glightbox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11.1.14/swiper-bundle.min.js"></script>

  <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>
