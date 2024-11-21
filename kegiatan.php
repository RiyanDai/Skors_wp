<?php
/**
 *  Template Name: Articles
 * 
 * 
 */

?>
<?php get_header() ?>

<h1>Articles</h1>

<section class="articles">
    <div class="container">
        <h2>Articles</h2>
        <div class="articles-list">
            <?php
            // Query untuk mengambil artikel terbaru
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 6,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <article class="article-item">
                        <a href="<?php the_permalink(); ?>" class="article-link">
                            <div class="article-thumbnail">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else : ?>
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
            else : ?>
                <p>No articles available.</p>
            <?php endif; ?>
        </div>
    </div>
</section>




<?php get_footer() ?>