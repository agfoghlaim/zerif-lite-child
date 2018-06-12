<?php
/**
 * Template Name: Full Width Top No Sidebar
 *Template Post Type: post, page
 * @package zerif-lite
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->
<?php zerif_after_header_trigger(); ?>
	<?php //zerif_before_page_content_trigger(); ?>
	<div id="content" class="site-content">

		<div class="container ywig-projects-full-top-container">

			<div class="row ywig-project-banner"
				
					<?php echo 'style=" height:200px; background:url('.get_the_post_thumbnail_url().');"'?> >
					
					<?php //nivo_slider( "header" ); ?>
		
			</div>

			<div class="content-left-wrap col-md-12">

				<?php zerif_top_page_content_trigger(); ?>

				<div id="primary" class="content-area">

					<main id="main" class="site-main">

						<?php
						while ( have_posts() ) :
							echo '<h1>';
							the_title();
							echo '</h1>';
							the_post();
							the_content();
							

							endwhile;
						?>

					</main><!-- #main -->

				</div><!-- #primary -->

				<?php zerif_bottom_page_content_trigger(); ?>

			</div><!-- .content-left-wrap -->
		
			
		
		<?php zerif_after_page_content_trigger(); ?>

	</div><!-- .container -->

<?php get_footer(); ?>
