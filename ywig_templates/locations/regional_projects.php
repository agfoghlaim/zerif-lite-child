<?php
/**
 * The template for displaying projects in regional office.
 * 
 *
 * @package zerif-lite
 */

?>
<!-- <div class="container"> -->
<div class="row ywig-locations-row" id="ywig-locations-row">


	<?php
		$query1 = new WP_Query( array( 'category_name' => $ywig_slug ) );
		if ( $query1->have_posts() ) {
			$second_col_class = "col-md-9";
			// The Loop
			while ( $query1->have_posts() ) {
				$query1->the_post();
				if ( has_post_thumbnail() ) {
				    $featured_img_url = get_the_post_thumbnail_url();
				    $ywig_google_img = get_post_meta(get_the_ID(), 'ywig-google-img', true);
				    $ywig_external_map_url = get_post_meta(get_the_ID(), 'ywig-external-map-url',true);

				    echo '<div class="col col-md-3 ywig-proj-img-col">';
					//echo '<p class="text-left">';

					//echo '<img class="ywig-proj-pic"  src="'.$featured_img_url.'">';
					echo '<a href="'.$ywig_external_map_url.'" target="_blank">';
					
				    echo '<img alt="Open in Google Maps" class="ywig-proj-map" src="'.$ywig_google_img.'key=AIzaSyAMy60iJGjTU1DzZaO0x1f7KMx4qVoZhHM"/>';
				    echo '</a>';
					//echo  '</p>';
					echo '</div>';
				} else{
				$second_col_class = "col-md-12";	
				}
				
					

				echo '<div class="'.$second_col_class.' text-left" id="ywig-locations-address-row">';
				echo '<h2>' . get_the_title() . '</h2>';

				$location_address_1 = get_post_meta(get_the_ID(), 'location-address-1', true);
				$location_eircode = get_post_meta(get_the_ID(), 'location-eircode', true);
				$location_phone = get_post_meta(get_the_ID(), 'location-phone', true);
				$facebook_url = get_post_meta(get_the_ID(), 'ywig-facebook-link', true);
				$twitter_url = get_post_meta(get_the_ID(), 'ywig-twitter-link', true);
				$instagram_url = get_post_meta(get_the_ID(), 'ywig-instagram-link', true);
				$youtube_url = get_post_meta(get_the_ID(), 'ywig-youtube-link', true);
				
				// address div
				?>
				<!-- <div class="col col-12 ywig-location-address-col"> -->
					<?php
					if(!empty($location_address_1)){
						?>
							<p class="ywig-location-address"><?php echo $location_address_1; ?></p>
					 
					<?php
					}

				//echo '</div>';//end address
				// start of social column
				//echo '<div class="col-md-4">';
					if(!empty($location_eircode)){
					?>
						<p><?php echo $location_eircode; ?></p>
					<?php
					}

					if(!empty($location_phone)){
					?>
						<p><?php echo $location_phone; ?></p>
					<?php
					}
					if(!empty($facebook_url)){
					?>
						<a target="_blank" class="ywig-location-social" href=<?php echo '"'.$facebook_url.'"' ?>><i class="fab fa-facebook-f"></i></a>
				 
				<?php
				}

				if(!empty($twitter_url)){
					?>
						<a  target="_blank" class="ywig-location-social" href=<?php echo '"'.$twitter_url.'"' ?>><i class="fab fa-twitter"></i></a>
				
				<?php
				}

				if(!empty($instagram_url)){
					?>
						<a  target="_blank" class="ywig-location-social" href=<?php echo '"'.$instagram_url.'"' ?>><i class="fab fa-instagram"></i></a>
				
				<?php
				}

				if(!empty($youtube_url)){
					?>
						<a  target="_blank" class="ywig-location-social" href=<?php echo '"'.$youtube_url.'"' ?>><i class="fab fa-youtube"></i></a>
				
				<?php
				}
				echo '</div></div>';//top row

				echo '<div class="row" id="ywig-locations-projects">';//for projects

				//$ywig_cat_slug = 'prospect-hill-project';
		
				include(locate_template('ywig_templates/locations/regional_projects_detail.php'));
				echo '</div>'; //end col for projects



				



			}
		
			wp_reset_postdata();
		}

?>
		




<!-- </div> -->