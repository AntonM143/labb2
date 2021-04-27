<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				while(have_posts()){
					the_post();
					?>
				
			<h1 class="page-title">

			<?php
			the_taxonomies();
			?>

			</h1>
				<?php
					
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				
			</header><!-- .page-header -->
					
			
			<?php 
			get_template_part( 'content', get_post_format() );
			}
				
			

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
