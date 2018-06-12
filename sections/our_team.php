<?php
/**
 * Our Team section
 *
 * @package zerif-lite
 */

zerif_before_our_team_trigger();

$zerif_ourteam_show = get_theme_mod( 'zerif_ourteam_show' );

echo '<section class="our-team' . ( ( is_customize_preview() && ( ! isset( $zerif_ourteam_show ) || $zerif_ourteam_show == 1 ) ) ? ' zerif_hidden_if_not_customizer ' : '' ) . '" id="team">';
	echo '<div class="ywig-event-wrap"></div>';
	echo '<div class="ywig-event-slant"></div>';
	zerif_top_our_team_trigger();

	echo '<div class="container">';

		echo '<div class="section-header">';
		?>
			<div class="row">
				<div class="col-12">
					<p class="text-center"><img id="ywig-make-relative" src="http://youthworkgalway.ie/wp-content/uploads/2018/06/ywig_tiny_colour.png" class="img-responsive center-block"></p>
				</div>
			</div>
		<?php

			/* Title */
			zerif_our_team_header_title_trigger();

			/* Subtitle */
			zerif_our_team_header_subtitle_trigger();

		echo '</div>';

if ( is_active_sidebar( 'sidebar-ourteam' ) ) {
	echo '<div class="row">';
	dynamic_sidebar( 'sidebar-ourteam' );
	echo '</div> ';
} elseif ( current_user_can( 'edit_theme_options' ) ) {

	if ( is_customize_preview() ) {
		/* translators: Our team section */
		printf( __( 'Add widgets in this area by going to the %s', 'zerif-lite' ), __( 'Our team section', 'zerif-lite' ) );
	} else {
		/* translators: Our team section in customizer */
		printf( __( 'Add widgets in this area by going to the %s', 'zerif-lite' ), sprintf( '<a href="%1$s" class="zerif-default-links">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;section&#93;=sidebar-widgets-sidebar-ourteam' ) ), __( 'Our team section', 'zerif-lite' ) ) );
	}
}

	echo '</div>';

	zerif_bottom_our_team_trigger();

echo '</section>';

zerif_after_our_team_trigger();

