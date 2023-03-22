<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package radio_salam
 */

get_header();
?>

<div class="main-container">
	<div class="container">
		<div class="row">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
			?>
			<div class="col-md-12">
				<?php
				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'radio_salam' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'radio_salam' ) . '</span> <span class="nav-title">%title</span>',
					)
				);
				?>
			</div>
		<?php
		endwhile;
		?>
		</div>
	</div>
</div>
<?php
get_footer();
