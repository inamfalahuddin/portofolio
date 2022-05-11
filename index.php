<?php include_once "config.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio | In'am Falahuddin</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="container navbar__content">
        <div class="navbar__brand">
          <a href=""><img src="./img/logo-brand-inam.png" alt="" /></a>
        </div>
        <div class="navbar__nav">
          <div class="navbar__nav__hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- nav-items -->
          <ul class="navbar__nav__items">
            <li class="navbar__nav__items__item">
              <a href="" class="active">Home</a>
            </li>
            <li class="navbar__nav__items__item">
              <a href="" class="">Services</a>
            </li>
            <li class="navbar__nav__items__item">
              <a href="" class="">Tools</a>
            </li>
            <li class="navbar__nav__items__item">
              <a href="" class="">Contact</a>
            </li>
          </ul>
          <!-- end nav-items -->
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- main -->
    <main>
      <!-- main hero -->
      <section class="container">
        <div class="main">
          <div class="main__text">
            <span class="text-primary"><?= $data_hero['hallo']; ?></span>
            <h1><?= $data_hero['title']; ?></h1>
            <p><?= $data_hero['description']; ?></p>
            <div class="main__text__button">
              <button class="btn btn-primary">Contact Us</button>
              <button class="btn btn-secondary">Learn More</button>
            </div>
          </div>
          <div class="main__image">
            <img src="./img/hero-image.png" alt="" />
          </div>
        </div>
      </section>
      <!-- end main hero -->

      <!-- experience -->
      <section class="container">
        <div class="ex-info">
          <?php foreach($data_experience as $data_ex) : ?>
          <div class="ex-info__item">
            <h2 class="ex-info__item__num"><?= $data_ex['ex']; ?></h2>
            <span class="ex-info__item__text">
              <p><?= $data_ex['des']; ?></p>
            </span>
          </div>
          <?php endforeach; ?>
        </div>
      </section>
      <!-- end experience -->

      <!-- services -->
      <section class="container">
        <div class="services">
          <div class="services-title title">
            <span><?= $data_services['title']; ?></span>
            <h2><?= $data_services['subtitle']; ?></h2>
          </div>

          <div class="services-card">
            <?php foreach($data_services['service'] as $data_serv) : ?>
            <div class="card">
              <img src="<?= $data_serv['img']; ?>" alt="" />
              <h5 style="margin-top: 1rem;" ><?= $data_serv['title']; ?></h5>
              <p><?= $data_serv['des']; ?></p>
            </div>
            <?php endforeach;  ?>
          </div>
        </div>
      </section>
      <!-- end services -->

      <!-- educations -->
      <section class="educations">
        <div class="container">
          <div class="educations-title title">
            <span><?= $data_educations['title']; ?></span>
            <h2><?= $data_educations['subtitle']; ?></h2>
          </div>
        </div>

        <div class="container">
          <div class="educations__content">
            <div class="educations__content__img">
              <img src="./img/edu-image.png" alt="" />
            </div>
            <div class="educations__content__txt">
              <ul class="educations__content__txt__list-item">
                <?php foreach($data_educations['education'] as $data_edu) : ?>
                  <li>
                    <div>
                      <h5><?= $data_edu['title']; ?></h5>
                      <p><?= $data_edu['des']; ?></p>
                    </div>
                  </li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
        </div>
        <!-- end educations -->
      </section>

      <!-- tools & skills -->
      <section class="container">
        <div class="tools-skills">
          <div class="tools-skills-title title">
            <span><?= $data_tools['title']; ?></span>
            <h2><?= $data_tools['subtitle']; ?></h2>
          </div>

          <div class="tools-skills__content">
            <?php foreach($data_tools['tool'] as $data_tool ) : ?>
            <div class="card--tools-skills">
              <img src="<?= $data_tool['img']; ?>" alt="" />
              <h5 style="margin-top: 1rem;" ><?= $data_tool['title']; ?></h5>
            </div>
            <?php endforeach ?>
          </div>
        </div>
      </section>
      <!-- end tools & skills -->

      <!-- banner -->
      <section class="container">
        <div class="banner">
          <h2>
            <?= $data_banner['title']; ?>
            <a href="https://fiverr.com/inamfalahuddin" target="_blank"
              >fiverr.com</a
            >
          </h2>
          <div class="banner__form-input">
            <input
              type="text"
              class="form-input"
              placeholder="Input your email ...."
            />
            <button class="btn btn-primary btn-rounded">Subscribe</button>
          </div>
        </div>
      </section>
      <!-- end banner -->
    </main>
    <!-- end main -->

    <!-- footer -->
    <footer>
      <h5>
        © <a href="<?= $data_copyright['address']; ?>"><?= $data_copyright["author"]; ?></a>. <?= date("Y"); ?>
      </h5>
    </footer>
    <!-- end footer -->

    <script src="./js/script.js"></script>
  </body>
</html>
