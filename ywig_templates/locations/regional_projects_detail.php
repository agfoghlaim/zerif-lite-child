	<?php

			//start projects

				$query_cat = new WP_Query( array( 'category_name' => $ywig_cat_slug ) );
					if ( $query_cat->have_posts() ) {
						echo '<h4 class="text-left" id="ywig-location-projects-heading"><strong>Projects, Programmes & Services</strong><small> -  based in ';
						echo the_title();
						echo '</small></h4>';
					// The Loop
						//echo '<div class="row">';
					while ( $query_cat->have_posts() ) {
						$query_cat->the_post();
						$page_link = get_post_meta(get_the_ID(), 'ywig-page-link', true);
						
						// for large screens
						echo '<div class="col col-md-4 col-lg-4 hidden-sm hidden-xs ywig-location-project-col">';
						
							echo '<div class="img-contain">';
						
								echo the_post_thumbnail('medium');
									echo '<a href="';
									echo $page_link;
									echo '">';
										echo '<div class="ywig-loc-proj-overlay">';
											echo the_title('<h4><span>','</span></h4>');
											echo '<p>';
											echo get_the_content();
											echo '</p>';
										echo '</div>'; //end .ywig-loc-proj-overlay
									echo '</a>';
							echo '</div>';//end img-contain
						echo '</div>';//end col

						// for small screens
						echo '<div class="col col-sm-12 col-xs-12 hidden-md hidden-lg ywig-location-project-col">';
						
							echo '<div class="img-contain">';
								
									echo '<a href="';
									echo $page_link;
									echo '">';
										echo the_post_thumbnail('medium');
									echo '</a>';
									echo '<div class="col-sm-12 col-xl-12">';
											echo the_title('<h4><span>','</span></h4>');
											echo '<p>';
											echo get_the_content();
											echo '</p>';
									echo '</div>'; //end .ywig-loc-proj-overlay

							echo '</div>';//end img-contain
						echo '</div>';//end col
						
						
					}
					//echo '</div>'; 
					wp_reset_postdata();
				}

				//end of projects
?>

