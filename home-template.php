<?php
/* Template Name: HomePage */

get_header();
?>

<div class="main-container home-page">
	<div class="container">
		<div class="row">
			<?php
				while ( have_posts() ) : the_post();
			?>
			<div class="col-md-12">
				<?= the_title( '<h1 class="main-title mb-3">', '</h1>' ); ?>
			</div>
			<div class="col-md-12 col-lg-6">
				<?php
					the_content();
				?>
			</div>
			<div class="col-md-12 col-lg-6">
					<?php radio_salam_post_thumbnail(); ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php
get_footer();
