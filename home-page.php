<?php /* Template Name: Page d'accueil */ ?>
<?= get_header() ?>
<div id="primary" class="container">
    <main id="row" class="site-main" role="main">
        <div class="col-sm-12">
            <?php if( get_field('address') ): ?>
                <h2><?php the_field('address'); ?></h2>
            <?php endif; ?>
            <?php if( get_field('col_title') ): ?>
                <h2><?php the_field('col_title'); ?></h2>
            <?php endif; ?>
        </div>
        <div class="col-sm-12">
            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();
                // Include the page content template.
                get_template_part( 'template-parts/content', 'page' );

            endwhile;
            ?>
        </div>
    </main>
</div><!-- .content-area -->
<?= get_footer() ?>
