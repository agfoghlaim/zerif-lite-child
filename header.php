<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package zerif-lite
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<?php zerif_top_head_trigger(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<?php zerif_bottom_head_trigger(); ?>
</head>

<?php if ( isset( $_POST['scrollPosition'] ) ) : ?>

	<body <?php body_class(); ?> onLoad="window.scrollTo(0,<?php echo intval( $_POST['scrollPosition'] ); ?>)">

<?php else : ?>

	<body <?php body_class(); ?> >
		<!-- facebook sdk -->
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

<?php
endif;

	zerif_top_body_trigger();

	/* Preloader */

if ( is_front_page() && ! is_customize_preview() ) :

	$zerif_disable_preloader = get_theme_mod( 'zerif_disable_preloader' );

	if ( isset( $zerif_disable_preloader ) && ( $zerif_disable_preloader != 1 ) ) :
		echo '<div class="preloader">';
			echo '<div class="status">&nbsp;</div>';
		echo '</div>';
		endif;

	endif;
	?>


<div id="mobilebgfix">
	<div class="mobile-bg-fix-img-wrap">
		<div class="mobile-bg-fix-img"></div>
	</div>
	<div class="mobile-bg-fix-whole-site">


<header id="home" class="header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">

	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav menu-align-center" role="banner">

		<div class="container">

			<?php zerif_before_navbar_trigger(); ?>

			<div class="navbar-header responsive-logo">
				<!-- ywig social btns -->
				<?php

				
					$the_query = new WP_Query( array( 'category_name' => 'prospect-hill-projects' ) );

					
					if ( $the_query->have_posts() ) {

						while ( $the_query->have_posts() ) {
								$the_query->the_post();
									$facebook_url = get_post_meta(get_the_ID(), 'ywig-facebook-link', true);
									$twitter_url = get_post_meta(get_the_ID(), 'ywig-twitter-link', true);
									$youtube_url = get_post_meta(get_the_ID(), 'ywig-youtube-link', true);
									$idonate_url = get_post_meta(get_the_ID(), 'ywig-idonate-link', true);
								?>
								<a href="<?php echo $facebook_url;  ?>" target="_blank" class="ywig-social-btn" id="ywig-facebook-btn"><i class="fa fa-facebook"></i></a>
								<a href="<?php echo $twitter_url; ?>" target="_blank" class="ywig-social-btn" id="ywig-twitter-btn"><i class="fa fa-twitter"></i></a>
								<a href="<?php echo  $youtube_url; ?>" target="_blank" class="ywig-social-btn" id="ywig-instagram-btn"><i class="fa fa-youtube-play"></i></a>
	
								<?php
							}
							
						
							wp_reset_postdata();
						} else {
						
						}

						?>

				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

				<span class="sr-only"><?php _e( 'Toggle navigation', 'zerif-lite' ); ?></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				</button>

					<div class="navbar-brand" itemscope itemtype="http://schema.org/Organization">
	
						<?php

						if ( has_custom_logo() ) {

							the_custom_logo();

						} else {

						?>
							<div class="site-title-tagline-wrapper">
								<h1 class="site-title">
									<a href=" <?php echo esc_url( home_url( '/' ) ); ?> ">
										<?php bloginfo( 'title' ); ?>
									</a>
								</h1>

								<?php

								$description = get_bloginfo( 'description', 'display' );

								if ( ! empty( $description ) ) :
								?>

									<p class="site-description">

										<?php echo $description; ?>

									</p> <!-- /.site-description -->

								<?php elseif ( is_customize_preview() ) : ?>

								<p class="site-description"></p>

								<?php endif; ?>

							</div> <!-- /.site-title-tagline-wrapper -->

						<?php } ?>

					</div> <!-- /.navbar-brand -->
						<a href="<?php echo $idonate_url;  ?>" target="_blank" class="btn ywig-donate-btn dark-pink-btn" id="ywig-fixed-donate-btn">Donate</a>

					
				</div> <!-- /.navbar-header -->

			<?php zerif_primary_navigation_trigger(); ?>

		</div> <!-- /.container -->

		<?php zerif_after_header_container_trigger(); ?>

	</div> <!-- /#main-nav -->
	<!-- / END TOP BAR -->
