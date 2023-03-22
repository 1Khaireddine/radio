<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package radio_salam
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="col-12">
	<header class="col-12">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="main-title">', '</h1>' );
		else :
			the_title( '<h2 class="title-article-listing"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header>

	<div class="col-12">
		<?php
		$file = get_field('broadcast');
		if( $file ):
			$url = wp_get_attachment_url( $file );?>
			<div class="cover-broadcast-player mt-3 mb-3">
				<audio class="broadcast-player" controls="controls" src="<?= $url ?>"></audio>
			</div>
			<?php endif;
		if (is_singular()):
		radio_salam_post_thumbnail();
		the_content(
			sprintf(
				wp_kses(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'radio_salam' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
		endif;
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'radio_salam' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>
