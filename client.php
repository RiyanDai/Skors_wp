
<?php
/**
 *  Template Name: Our Client
 * 
 */

?>
<?php get_header() ?>
  
<main>
  <section class="section about-us" id="about-us">
    <div class="container">
        <h2 class="h2">Daftar Mitra</h2>
        <div class="client-wrap">
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
        <div class="client-wrap">
            <div class="container-profile">
                <div class="klien-profile">
                    <img src="<?= get_theme_file_uri( "img/review2.png" ) ?>" width="200" height="200" loading="lazy" alt="klien" class="img-cover">
                </div>
                <div class="nama-klien">
                    <h2>Putrianne</h2>
                    <h3>PT. Satu Dua</h3>
                </div>
            </div>
            <p class="profile-moto">Saya sangat puas dengan jasa pengoptimalan bisnis yang diberikan. Sebelum menggunakan jasa ini, toko bunga saya hanya memiliki sedikit pelanggan, dan sulit untuk bersaing dengan toko lain. Namun, setelah menggunakan layanan ini, penjualan meningkat hingga 40% dalam 3 bulan pertama.</p>
        </div>
        <div class="client-wrap">
            <div class="container-profile">
                <div class="klien-profile">
                    <img src="<?= get_theme_file_uri( "img/review3.png" ) ?>" width="200" height="200" loading="lazy" alt="klien" class="img-cover">
                </div>
                <div class="nama-klien">
                    <h2>Rasya Diandra</h2>
                    <h3>PT. Satu Dua</h3>
                </div>
            </div>
            <p class="profile-moto">"Layanan pengoptimalan bisnis yang luar biasa!" Kami sangat puas dengan hasil yang diberikan oleh tim ini. Sejak menggunakan jasa mereka, pendapatan bisnis kami meningkat signifikan, dan proses operasional menjadi jauh lebih efisien. Mereka tidak hanya membantu mengidentifikasi masalah, tetapi juga memberikan solusi konkret yang dapat langsung kami terapkan.</p>
        </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>



