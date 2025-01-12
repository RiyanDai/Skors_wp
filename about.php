<?php
/**
 *  Template Name: About Us
 * 
 */

?>

<?php get_header() ?>
  
<main>
  <section class="section about-us" id="about-us">
    <div class="bannerHome">
      <img src="<?= get_theme_file_uri( 'img/AboutUs.png' ) ?>"  alt="hero banner" class="w-100">
    </div>
  </section>
  <div class="managenen">
    <div class="kiri-manegemen">
      <h2 class="h2">Perjalanan Kami</h2>
      <p class="moto">"Perjalanan kami dimulai pada tahun 2020 dengan lahirnya Skor, sebuah platform manajemen performa bisnis berbasis web yang dirancang untuk membantu korporasi dan pelaku UMKM, seperti start-up, kedai kopi, usaha katering, dan lainnya, dalam mengelola bisnis mereka secara efektif. Dengan fitur-fitur yang mencakup pengelolaan sumber daya manusia, keuangan, dan strategi bisnis, kami hadir sebagai mitra terpercaya yang berkomitmen untuk mendukung pertumbuhan dan kesuksesan usaha. Hingga hari ini, Skor terus berkembang dengan misi untuk memberdayakan bisnis dalam menghadapi tantangan dan mencapai potensi terbaiknya."</p>
    </div>
    <div class="kanan-managemen">
      <img src="<?= get_theme_file_uri( 'img/Manajemen.png' ) ?>"  alt="managemen banner">
    </div>
  </div>

  <div class="container">
    <h2 class="tim">Tim Kami</h2>
    <div class="daftar-tim">
      <div>
        <img src="<?= get_theme_file_uri( 'img/actor.png' ) ?>"  alt="ketua">
        <h4 class="ket">Priestian Octafian</h4>
        <h4 class="ket">CEO</h4>
      </div>
      <div>
        <img src="<?= get_theme_file_uri( 'img/actor2.png' ) ?>"  alt="Finance">
        <h4 class="ket">Sabrina Marta Disa</h4>
        <h4 class="ket">Finance</h4>
      </div>
      <div>
        <img src="<?= get_theme_file_uri( 'img/actor3.png' ) ?>"  alt="IT Lead">
        <h4 class="ket">Izmi Nabilah Isnaini</h4>
        <h4 class="ket">IT Lead</h4>
      </div>
      <div>
        <img src="<?= get_theme_file_uri( 'img/actor4.png' ) ?>"  alt="UIX Designer">
        <h4 class="ket">Liana Eka Wardhani</h4>
        <h4 class="ket">UIX Designer</h4>
      </div>
    </div>
  </div>

  <div class="semboyan">
    <h2>Semboyan Kami</h2>
    <p>”Great goals are achieved by great teams, great teams are built by great leaders,</p>
    <p>and great leaders are shaped by a great mindset.”</p>
  </div>
</main>

<?php get_footer(); ?>



