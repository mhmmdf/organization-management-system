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
          <h3 class="section-title"><?= lang('UKM.register_title') ?></h3>
        </div>
      </div>
      <form class="php-email-form" id="register">
      <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="form">
                <div class="form-group">
                  <input type="number" name="nim" class="form-control" id="nim" placeholder="<?= lang('UKM.register_nim') ?>" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="<?= lang('UKM.register_fullname') ?>" required>
                </div><br>
                <h6 class="section-title"><?= lang('UKM.register_gender') ?></h6>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="male">
                  <label class="form-check-label" for="laki-laki"><?= lang('UKM.register_male') ?></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="female">
                  <label class="form-check-label" for="perempuan"><?= lang('UKM.register_female') ?></label>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="prodi" id="prodi" placeholder="<?= lang('UKM.register_prodi') ?>" required>
                </div><br>
                <h6 class="section-title"><?= lang('UKM.register_ukm') ?></h6>
                <select class="form-select" aria-label="UKM select" name="UKM">
                  <option selected value=""><?= lang('UKM.register_ukm_select') ?></option>
                  <option value="tari"><?= lang('UKM.register_ukm_dance') ?></option>
                  <option value="taekwondo"><?= lang('UKM.register_ukm_taekwondo') ?></option>
                  <option value="musik"><?= lang('UKM.register_ukm_music') ?></option>
                  <option value="basket"><?= lang('UKM.register_ukm_basketball') ?></option>
                  <option value="tenis"><?= lang('UKM.register_ukm_table_tennis') ?></option>
                </select>

                <br>
                <h6 class="section-title"><?= lang('UKM.register_day') ?></h6>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="monday" id="monday" name="hari">
                  <label class="form-check-label" for="monday"><?= lang('UKM.register_monday') ?></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="tuesday" id="tuesday" name="hari">
                  <label class="form-check-label" for="tuesday"><?= lang('UKM.register_tuesday') ?></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="wednesday" id="wednesday" name="hari">
                  <label class="form-check-label" for="wednesday"><?= lang('UKM.register_wednesday') ?></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="thursday" id="thursday" name="hari">
                  <label class="form-check-label" for="thursday"><?= lang('UKM.register_thursday') ?></label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="friday" id="friday" name="hari">
                  <label class="form-check-label" for="friday"><?= lang('UKM.register_friday') ?></label>
                </div>
                <br><br>

                <button type="submit" class="btn btn-outline-success"><?= lang('UKM.register_submit') ?></button>
                <button type="button" onclick="resetForm()" class="btn btn-outline-danger"><?= lang('UKM.register_cancel') ?></button>

            </div>

        </div>
      </div>
      </form>
    </section>
  </main>

  <script>
    const form = document.getElementById("register");

    form.addEventListener("submit", function(event) {
      event.preventDefault();
      const data = new FormData(form);
      alert('<?= lang('UKM.register_alert') ?>');
      data.forEach(function(value, key) {
        alert(key + " : " + value);
      });
    });

    function resetForm() {
      document.getElementById("register").reset();
    }
  </script>

<?= $this->endSection() ?>
