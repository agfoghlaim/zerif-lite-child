<?php
/**
 * Big title section
 *
 * @package zerif-lite
 */

$zerif_slider_shortcode = get_theme_mod( 'zerif_bigtitle_slider_shortcode' );

$zerif_bigtitle_show = get_theme_mod( 'zerif_bigtitle_show' );

echo '<div class="' . ( ! empty( $zerif_slider_shortcode ) ? 'home-slider-plugin' : '' ) . ' home-header-wrap">';

	$zerif_parallax_img1 = get_theme_mod( 'zerif_parallax_img1', get_template_directory_uri() . '/images/background1.jpg' );
	$zerif_parallax_img2 = get_theme_mod( 'zerif_parallax_img2', get_template_directory_uri() . '/images/background2.png' );
	$zerif_parallax_use  = get_theme_mod( 'zerif_parallax_show' );

if ( ! empty( $zerif_slider_shortcode ) ) {
	echo do_shortcode( $zerif_slider_shortcode );
} else {

	if ( $zerif_parallax_use == 1 && ( ! empty( $zerif_parallax_img1 ) || ! empty( $zerif_parallax_img2 ) ) ) {
		//echo '<ul id="parallax_move_">';
		if ( ! empty( $zerif_parallax_img1 ) ) {
			echo '<div class="ywig-big-pic" data-depth="0.10" style="background-image: url(' . esc_url( $zerif_parallax_img1 ) . ');"></div>';
		}
		if ( ! empty( $zerif_parallax_img2 ) ) {
			echo '<div class="" data-depth="0.20" style="background-image: url(' . esc_url( $zerif_parallax_img2 ) . ');"></div>';
		}

		//echo '</ul>';
	}

	echo '<div class="header-content-wrap ' . ( ( is_customize_preview() && ( ! isset( $zerif_bigtitle_show ) || $zerif_bigtitle_show == 1 ) ) ? ' zerif_hidden_if_not_customizer ' : '' ) . '">';
	?>
	<div class="ywig-header-colour col col-md-4 col-sm-4 col-xs-6" id="ywig-header-colour-one"></div>
	<div class="ywig-header-colour col col-md-4 col-sm-4 col-xs-6" id="ywig-header-colour-two"></div>
	<div class="ywig-header-colour col col-md-4 col-sm-4 col-xs-6" id="ywig-header-colour-three"></div>
	<div class="ywig-header-colour col col-md-4 col-sm-4 col-xs-6" id="ywig-header-colour-four"></div>
	<div class="ywig-header-colour col col-md-4 col-sm-4 col-xs-6" id="ywig-header-colour-five"></div>
	<div class="ywig-header-colour col col-md-4 col-sm-4 col-xs-6" id="ywig-header-colour-six"></div>
	<?php 
	echo '<div class="container">';
	?>
		<!-- 	svg experiment
 -->
 	 <div class="col col-md-3 col-lg-3 ywig-animation-row ywig-animation-row"> 
 	<!-- <div class="ywig-animation-row"> -->
		<?xml version="1.0" encoding="utf-8"?>
			<svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
				 x="0px" y="0px" width="300px" height="300px" viewBox="0 0 200 200" xml:space="preserve">

			<path class="blue" fill="#01cbfb" stroke="#3E4E32" stroke-miterlimit="10" d="M102.514,117.705c-11.484,8.165-19.802,17.137-25.347,24.256
				C30.926,90.982,40.648,31.601,40.648,31.601C79.5,56.426,95.878,90.133,102.514,117.705z"/>
			<path class="blue"  fill="none" stroke="#3E4E32" stroke-miterlimit="10" d="M105.36,167c-6.158-4.223-11.756-8.617-16.839-13.127
				c6.312-0.853,12.154-2.074,17.544-3.594C106.299,160.601,105.36,167,105.36,167z"/>
			<path class="darkgreen" id="ywig-dg" fill="none" stroke="#3E4E32" stroke-miterlimit="10" d="M106.766,150.279c-5.389,1.52-11.232,2.741-17.544,3.594
				c-4.396-3.891-8.401-7.878-12.055-11.912c5.545-7.119,13.863-16.091,25.347-24.256C105.572,130.329,106.576,141.671,106.766,150.279
				z"/>
			<path class="orange"  fill="none" stroke="#3E4E32" stroke-miterlimit="10" d="M89.222,153.873c-6.429,0.865-13.357,1.337-20.811,1.337
				c0,0,2.75-5.536,8.755-13.249C80.82,145.995,84.826,149.982,89.222,153.873z"/>
			<path class="orange"  fill="none" stroke="#3E4E32" stroke-miterlimit="10" d="M169.204,95.493c0,0-11.612,40.5-62.438,54.786
				c-0.189-8.608-1.193-19.95-4.252-32.574c5.782-4.105,12.356-8.004,19.79-11.367c-2.205,4.754-4.116,10.12-5.589,16.162
				c0,0,23.983-4.495,39.647-25.865C160.475,96.064,164.754,95.684,169.204,95.493z"/>
			<path class="red" fill="none" stroke="#3E4E32" stroke-miterlimit="10" d="M156.362,96.635c-15.664,21.37-39.647,25.863-39.647,25.863
				c1.473-6.04,3.384-11.403,5.589-16.16C132.123,101.89,143.448,98.398,156.362,96.635z"/>
			<path class="pink"  fill="none" stroke="#3E4E32" stroke-miterlimit="10" d="M168.064,69.248c-2.189,11.296-6.484,20.277-11.702,27.387
				c-12.914,1.764-24.239,5.255-34.059,9.703C137.785,73.039,168.064,69.248,168.064,69.248z"/>
			<path class="green"  fill="none" stroke="#3E4E32" stroke-miterlimit="10" d="M106.825,41.104c0,0,17.876,28.529-0.762,63.521
				C106.063,104.625,85.525,77.617,106.825,41.104z"/>
			</svg>
	</div>



	<div id="ywig-h1-intro" class="col col-md-8 col-lg-8 col-md-offset-3 col-lg-offset-3 col-sm-8 col-sm-offset-3">
	<?php

	zerif_big_title_text_trigger();

	echo '<h2 class="ywig-big-intro-sub">Empowering young people</h2>';
?></div><?php
	$zerif_bigtitle_redbutton_label_default = get_theme_mod( 'zerif_bigtitle_redbutton_label' );

	if ( ! empty( $zerif_bigtitle_redbutton_label_default ) ) {

		$zerif_bigtitle_redbutton_label = get_theme_mod( 'zerif_bigtitle_redbutton_label_2', $zerif_bigtitle_redbutton_label_default );

	} elseif ( current_user_can( 'edit_theme_options' ) ) {

		$zerif_bigtitle_redbutton_label = get_theme_mod( 'zerif_bigtitle_redbutton_label_2', __( 'Customize this button', 'zerif-lite' ) );

	} else {

		$zerif_bigtitle_redbutton_label = get_theme_mod( 'zerif_bigtitle_redbutton_label_2' );

	}

	if ( current_user_can( 'edit_theme_options' ) ) {

		$zerif_bigtitle_redbutton_url = get_theme_mod( 'zerif_bigtitle_redbutton_url', admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_bigtitle_redbutton_url' ) );

		$zerif_bigtitle_greenbutton_label = get_theme_mod( 'zerif_bigtitle_greenbutton_label', __( 'Customize this button', 'zerif-lite' ) );

		$zerif_bigtitle_greenbutton_url = get_theme_mod( 'zerif_bigtitle_greenbutton_url', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_bigtitle_greenbutton_url' ) ) );

	} else {

		$zerif_bigtitle_redbutton_url = get_theme_mod( 'zerif_bigtitle_redbutton_url' );

		$zerif_bigtitle_greenbutton_label = get_theme_mod( 'zerif_bigtitle_greenbutton_label' );

		$zerif_bigtitle_greenbutton_url = get_theme_mod( 'zerif_bigtitle_greenbutton_url' );

	}


	if ( ( ! empty( $zerif_bigtitle_redbutton_label ) && ! empty( $zerif_bigtitle_redbutton_url ) ) || ( ! empty( $zerif_bigtitle_greenbutton_label ) && ! empty( $zerif_bigtitle_greenbutton_url ) ) ) :

		echo '<div class="buttons">';

		zerif_big_title_buttons_top_trigger();

		if ( ! empty( $zerif_bigtitle_redbutton_label ) && ! empty( $zerif_bigtitle_redbutton_url ) ) :

			echo '<a href="' . esc_url( $zerif_bigtitle_redbutton_url ) . '" class="btn btn-primary custom-button red-btn">' . wp_kses_post( $zerif_bigtitle_redbutton_label ) . '</a>';

			elseif ( is_customize_preview() ) :

				echo '<a href="" class="btn btn-primary custom-button red-btn zerif_hidden_if_not_customizer"></a>';

			endif;

			if ( ! empty( $zerif_bigtitle_greenbutton_label ) && ! empty( $zerif_bigtitle_greenbutton_url ) ) :

				echo '<a href="' . esc_url( $zerif_bigtitle_greenbutton_url ) . '" class="btn btn-primary custom-button green-btn">' . wp_kses_post( $zerif_bigtitle_greenbutton_label ) . '</a>';

			elseif ( is_customize_preview() ) :

				echo '<a href="" class="btn btn-primary custom-button green-btn zerif_hidden_if_not_customizer"></a>';

			endif;

			zerif_big_title_buttons_bottom_trigger();

			echo '</div>';

		endif;

	echo '</div>';

	echo '</div><!-- .header-content-wrap -->';
	//get_template_part('ywig_templates/ywig_green_row');
	echo '<div class="clear"></div>';
}
?>

</div>
