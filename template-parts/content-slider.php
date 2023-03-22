<?php
  $args = array( 'post_type' => 'slider', 'posts_per_page' => 10 );
  $the_query = new WP_Query( $args );
?>
<div class="cover-main-slider">
  <div class="main-slider" id="main-slider">
      <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="slide-item">
          <div class="cover-inner">
            <div class="slide-description">
              <button id="play-onair" class="play-onair">
                <span class="material-symbols-outlined">
                  play_circle
                </span>
                <span class="material-symbols-outlined">
                  pause_circle
                </span>
              </button>
              <div class="slide-city-name" id="slide-city-name">
                <?= the_title(); ?>
              </div>
              <div class="slide-content">
                <?php the_content(); ?>
              </div>
              <div class="slide-frequency">
                <?= the_field("frequence"); ?>
                <span class="material-symbols-outlined">
                  radio
                </span>
              </div>
            </div>
            <?= get_the_post_thumbnail(); ?>
          </div>
        </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
        <?php else:  ?>
        <div class="empty-slide">

        </div>
    <?php endif; ?>
  </div>
</div>
