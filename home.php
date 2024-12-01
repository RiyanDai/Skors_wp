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
      <div class="center">
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
                    <a href="#" class="card-title">Kenali Kebutuhan tim anda, konsultasikan bersama SKOR</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                  <img src="<?= get_theme_file_uri( 'img/card2.png' ) ?>" width="510" height="700" loading="lazy"
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
                  <img src="<?= get_theme_file_uri( 'img/card3.png' ) ?>"  width="510" height="700" loading="lazy"
                    alt="How intercom brings play into their design process" class="img-cover">
                </figure>

                <div class="card-content">

                  <p class="card-subtitle">Ukuran Performa Maksimal</p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Ukur performa, raih kesempurnaan! Optimalkan strategi anda dengan SKOR</a>
                  </h3>

                </div>

              </div>
            </li>
          </ul>

          <div class="klien">
            <h2 class="klien-h2">Klien Kami</h2>
            <img src="<?= get_theme_file_uri( 'img/klien.png' ) ?>"  width="1100" height="700">
            <div>
              <div class="riview">
                <div>
                  <img src="<?= get_theme_file_uri( 'img/review.png' ) ?>">
                </div>
                <div class="profil-review">
                  <h2>Teresa Diora</h2> 
                  <h3>PT. Satu Dua</h3>
                </div>
              </div>
              <p class="text-review">Saya sangat puas dengan layanan pengoptimalan bisnis yang diberikan. Pendekatannya sangat profesional, dan hasilnya terlihat nyata.</p>
            </div>
          </div>
          
        </div>
      </section>


      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <h2 class="h2 section-title">Berita Terkini</h2>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                  <img src="<?= get_theme_file_uri( 'img/blog-1.jpg' ) ?>" width="860" height="646" loading="lazy"
                    alt="How to Become a Successful Entry Level UX Designer" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="time" datetime="2024-06-16">June 16, 2024</time>

                  <h3 class="h3">
                    <a href="#" class="card-title">How to Become a Successful Entry Level UX Designer</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card grid">

                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                  <img src="<?= get_theme_file_uri( 'img/blog-2.jpg' ) ?>" width="860" height="646" loading="lazy"
                    alt="2024Local SEO Success: The Year of Everywhere" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="time" datetime="2024-06-16">June 16, 2024</time>

                  <h3 class="h3">
                    <a href="#" class="card-title">2024Local SEO Success: The Year of Everywhere</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card grid">

                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                  <img src="<?= get_theme_file_uri( 'img/blog-3.jpg' ) ?>" width="860" height="646" loading="lazy"
                    alt="The Guide to Running a Client Discovery Process" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="time" datetime="2024-06-16">June 16, 2024</time>

                  <h3 class="h3">
                    <a href="#" class="card-title">The Guide to Running a Client Discovery Process</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card grid">

                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                  <img src="<?= get_theme_file_uri( 'img/blog-4.jpg' ) ?>" width="860" height="646" loading="lazy"
                    alt="3 Ways to Get Client Approval for Scope Changes" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="time" datetime="2024-06-16">June 16, 2024</time>

                  <h3 class="h3">
                    <a href="#" class="card-title">3 Ways to Get Client Approval for Scope Changes</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card grid">

                <figure class="card-banner img-holder" style="--width: 860; --height: 646;">
                  <img src="<?= get_theme_file_uri( 'img/blog-5.jpg' ) ?>" width="860" height="646" loading="lazy"
                    alt="Top 21 Must-Read Blogs For Creative Agencies" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="time" datetime="2024-06-16">June 16, 2024</time>

                  <h3 class="h3">
                    <a href="#" class="card-title">Top 21 Must-Read Blogs For Creative Agencies</a>
                  </h3>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <?php get_footer() ?>


