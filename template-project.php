<?php
/**
 * Template Name: Project Template
 *
 * @package zerif-lite
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->
<?php //zerif_after_header_trigger(); ?>
	<?php //zerif_before_page_content_trigger(); ?>
	<div id="content" class="site-content">

			<div class="content-left-wrap col-md-9 ywig-project-temp">

				<?php zerif_top_page_content_trigger(); ?>

				<div id="primary" class="content-area">

					<main id="main" class="site-main">
						
							<div class="row">
								<?php 

								$square = get_field( 'square_logo' );

								if( !empty($square) ): ?>

								<?php endif; ?>

								<div class="col col-sm-4 ywig-proj-img-col">
										<img class="ywig-proj-map" src="<?php echo $square['url']; ?>">
								</div>

								<div class="col-sm-8 text-left" id="ywig-locations-address-row">
									<h2><?php the_title(); ?></h2>				
									<p class="ywig-location-address"><?php the_field( 'project_address' ); ?></p>
									<div class="col-12 table-responsive hidden-sm hidden-xs" style="margin-top:20px;">          
										<table class="table" id="ywig-project-temp-table">
											<thead>
												<tr>
												   <th>Contact</th>
												   <th></th>
												   <th></th>
												   <th></th>
											</thead>
											<tbody>
												<tr>
											        <td><?php the_field('contact_1_name'); ?></td>
											        <td><?php the_field('contact_1_position'); ?></td>
											        <td><?php the_field('contact_1_phone'); ?></td>
											        <td><?php the_field('contact_1_email'); ?></td>
											     </tr>
											     <tr>
											        <td><?php the_field('contact_2_name'); ?></td>
											        <td><?php the_field('contact_2_position'); ?></td>
											        <td><?php the_field('contact_2_phone'); ?></td>
											        <td><?php the_field('contact_2_email'); ?></td>
											     </tr>
											</tbody>
											</table>
									</div>
											
									<div class="col hidden-md hidden-lg"><br>
								       
								        <p><strong><?php the_field( 'contact_1_position' ); ?></strong><br>
											<span><?php the_field( 'contact_1_name' ); ?></span><br>
											<span><?php the_field( 'contact_1_phone' ); ?></span><br>
											<span><?php the_field( 'contact_1_email' ); ?></span>
								        </p>
								        <p><strong><?php the_field( 'contact_2_position' ); ?></strong><br>
								        	<span><?php the_field( 'contact_2_name' ); ?></span><br>
											<span><?php the_field( 'contact_2_phone' ); ?></span><br>
											<span><?php the_field( 'contact_2_email' ); ?></span>
								        </p>
									</div>


										<?php 

										$facebook = get_field( 'project_fb' );
										$twitter = get_field( 'project_twitter' );
										$instagram = get_field( 'project_instagram' );

										if( !empty( $facebook ) ): ?>
											<a target="_blank" class="ywig-location-social" href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a>

										<?php endif; ?>
										<?php 
											if( !empty( $twitter ) ): ?>
											<a target="_blank" class="ywig-location-social" href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a>

										<?php endif; ?>
										<?php 
											if( !empty( $instagram ) ): ?>
											<a target="_blank" class="ywig-location-social" href="<?php echo $instagram; ?>"><i class="fa fa-instagram"></i></a>

										<?php endif; ?>
								</div><!-- end 8 col -->
							</div><!-- end loc row -->



						
						<div class="row ywig-project-temp-content">

							<h4 class="text-left"><?php the_field( 'who_we_are_and_what_we_do_title' ); ?></h4>
							<p><?php the_field( 'who_we_are' ); ?></p>
							<p>
							<?php 

								$image = get_field( 'image_2' );

								if( !empty($image) ): ?>

									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>
							</p>
							<h4 class="text-left"><?php the_field( 'our_aims_title' ); ?></h4>
							<p><?php the_field( 'our_aims' ); ?></p>
							
								
							<p>
							<?php 

								$image = get_field( 'image_3' );

								if( !empty($image) ): ?>

									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>
							</p>
							<h4 class="text-left"><?php the_field( 'our_activites_title' ); ?></h4>
							<p><?php the_field( 'our_activities' ); ?></p>
								
													<p>
							<?php 

								$image = get_field( 'image_1' );

								if( !empty( $image ) ): ?>

									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

								<?php endif; ?>

							</p>
							<h4 class="text-left"><?php the_field( 'contact_title' ); ?></h4>
							<p><?php the_field( 'contact_details' ); ?></p>
						</div>

					</main><!-- #main -->

				</div><!-- #primary -->

				<?php zerif_bottom_page_content_trigger(); ?>

			</div><!-- .content-left-wrap -->
		
			<?php zerif_sidebar_trigger(); ?>
		
		<?php zerif_after_page_content_trigger(); ?>

	</div><!-- .container -->

<?php get_footer(); ?>
