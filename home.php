<?php
/**
 *  Template Name: Skors Template
 * 
 */

?>
<?php get_header() ?>
  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="hero">
        
        <div class="bannerHome">
        <img src="<?= get_theme_file_uri( 'img/banner-home.png' ) ?>"  alt="hero banner" class="w-100">
        </div>
        <div class="banner-content">
          <a href="#" class="btn btn-primary">Mulai Jelajah</a>
        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="service" aria-label="service">
        <div class="container">

          <div class="section-image">
            <img src="<?= get_theme_file_uri( 'img/What are we.svg' ) ?>" width="114%" height="80%" alt="Desain HP">
          </div>
        </div>
      </section>
      




      <!-- 
        - #PROJECT
      -->

      <section class="section project" id="project" aria-label="project">
        <div class="container">

          <ul class="grid-list">

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="<?= get_theme_file_uri( 'img/card.png' ) ?>" width="510" height="700" loading="lazy"
                    alt="Designing a better cinema experience" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">Analisis Kebutuhan</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Kenali kebutuhan tim anda, konsultasikan bersama SKOR</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="<?= get_theme_file_uri( "img/card2.png" ) ?>" width="510" height="700" loading="lazy"
                    alt="Building design process within teams" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">Tingkatkan Keuntungan</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Tingkatkan keuntungan bisnis anda, dengan efisien bersama SKOR</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="<?= get_theme_file_uri( "img/card3.png" ) ?>" width="510" height="700" loading="lazy"
                    alt="How intercom brings play into their design process" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">Ukur Performa Maksimal</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Ukur performa, raih kesempurnaan! Optimalkan strategi anda dengan SKOR</a>
                  </h3>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

        <div class="container">

          <h2 class="h2">Klien Kami</h2>
          <img src="<?= get_theme_file_uri( "img/klien.png" ) ?>" loading="lazy" alt="klien" class="img-cover">
          <div class="container-profile">
            <div class="klien-profile">
              <img src="<?= get_theme_file_uri( "img/review.png" ) ?>" width="200" height="200" loading="lazy" alt="klien" class="img-cover">
            </div>

            <div class="nama-klien">
              <h2>Teresa Diora</h2>
              <h3>PT. Satu Dua</h3>
            </div>
          </div>
          <p class="profile-moto">Saya sangat puas dengan layanan pengoptimalan bisnis yang diberikan. Pendekatannya sangat profesional, dan hasilnya terlihat nyata.</p>
        </div>

        <div class="demontrasi">
          <div class="kiri">
            <h2 class="h2">Eksplorasi Web Aplikasi Kami</h2>
            <p class="moto">Rasakan pengalaman mengelola tim bisnis dengan mudah, cepat dan aman</p>
            <a href="#" class="btn btn-primary">Coba Demo</a>
          </div>
          <div class="kanan">
          <img src="<?= get_theme_file_uri( 'img/demo.png' ) ?>"  alt="hero banner">
          </div>
        </div>
        



      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <h2 class="h2 section-title">Berita Terkini</h2>
          <h3 class="link-article"><a href="article">Lihat Semua</a></h3>
        </div>

      </section>

      <?php get_footer() ?>


