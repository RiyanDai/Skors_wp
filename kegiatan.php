<?php
/**
 *  Template Name: Articles
 * 
 * 
 */

?>
<?php get_header() ?>


<!-- CSS dengan get_theme_file_uri -->
<link href="<?php echo get_theme_file_uri('vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_theme_file_uri('css/templatemo-stand-blog.css'); ?>">
<link rel="stylesheet" href="<?php echo get_theme_file_uri('css/owl.css'); ?>">
<link rel="stylesheet" href="<?php echo get_theme_file_uri('css/style.css') ?>">




<div class="custom-banner">
  <h1>Artikel Seputar Skors</h1>
</div>




<div class="main-banner header-text">
  <div class="container-fluid">
    <div class="owl-banner owl-carousel">
      <?php
      // Query untuk mengambil artikel terbaru
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,  // Menampilkan 5 artikel terbaru
        'orderby' => 'date',
        'order' => 'DESC',
      );

      $query = new WP_Query($args);

      if ($query->have_posts()):
        while ($query->have_posts()):
          $query->the_post();
          ?>
          <div class="item">
            <?php if (has_post_thumbnail()): ?>
              <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>">
            <?php else: ?>
              <img src="<?= get_theme_file_uri('img/default-banner.png'); ?>" alt="Default Banner">
            <?php endif; ?>
            <div class="item-content">
              <div class="meta-category" style="color: orange;">
                <?php
                // Menampilkan kategori, kecuali 'Uncategorized'
                $categories = get_the_category();
                $separator = ', ';
                $output = '';
                if ($categories) {
                  foreach ($categories as $category) {
                    if ($category->name != 'Uncategorized') {  // Mengecek kategori 'Uncategorized'
                      if ($output)
                        $output .= $separator;
                      $output .= $category->name;
                    }
                  }
                  echo $output;
                }
                ?>
              </div>
              <a href="<?php the_permalink(); ?>">
                <h4><?php the_title(); ?></h4>
              </a>
              <ul class="post-info">
                <li><a href="#"><?php the_date(); ?></a></li>
              </ul>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata();
      else: ?>
        <p>No articles available.</p>
      <?php endif; ?>
    </div>
  </div>
</div>



<section class="articles">
  <div class="container">
   
    <div class="articles-list">
      <?php
      // Query untuk mengambil artikel terbaru
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC',
      );

      $query = new WP_Query($args);

      if ($query->have_posts()):
        while ($query->have_posts()):
          $query->the_post(); ?>
          <article class="article-item">
            <a href="<?php the_permalink(); ?>" class="article-link">
              <div class="article-thumbnail">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else: ?>
                  <div class="placeholder-thumbnail"></div>
                <?php endif; ?>
              </div>
              <div class="article-content">
                <h3 class="article-title"><?php the_title(); ?></h3>
                <p class="article-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
              </div>
            </a>
          </article>
        <?php endwhile;
        wp_reset_postdata();
      else: ?>
        <p>No articles available.</p>
      <?php endif; ?>
    </div>
  </div>
</section>






<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="<?php echo get_theme_file_uri('vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo get_theme_file_uri('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo get_theme_file_uri('js/custom.js'); ?>"></script>
<script src="<?php echo get_theme_file_uri('js/owl.js'); ?>"></script>
<script src="<?php echo get_theme_file_uri('js/slick.js'); ?>"></script>
<script src="<?php echo get_theme_file_uri('js/isotope.js'); ?>"></script>
<script src="<?php echo get_theme_file_uri('js/accordions.js'); ?>"></script>

<script language="text/Javascript">
  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
  function clearField(t) {                   //declaring the array outside of the
    if (!cleared[t.id]) {                      // function makes it static and global
      cleared[t.id] = 1;  // you could use true and false, but that's more typing
      t.value = '';         // with more chance of typos
      t.style.color = '#fff';
    }
  }
</script>



<?php get_footer() ?>