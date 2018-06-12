<?php
/**
 * The template for displaying custom counselling row.
 * 
 *
 * @package zerif-lite
 */

?>
<section id="counselling" class="counselling">
    <div class="container">
		<div class="section-header">
			<h2 class="dark-text">Youth Councelling</h2>
		</div>

		<div class="row">

		    <div class="col-xl-5 col-xl-offset-1  col-lg-5 col-lg-offset-1  col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1   project project-counselling   hidden-xs">
		    	<div class="initial">
					<img class="ywig-logo-white"  src="http://138.68.182.248/wp-content/uploads/2018/05/listen_logo.png" >
					<h2>
						<span class="h2-text">
						<span class="ywig-under">Youth</span> Counselling Service
						</span>
					</h2>
				</div>
		    	<div class="project-hover">
		        	<img  class="ywig-logo-color"  src="http://138.68.182.248/wp-content/uploads/2018/05/listen_logo_color.png">
		            <h2 class="ywig-thin">Need to Talk?</h2>
		            <hr />
		            <p>We are a team of $% core staff and volunteers working in %$ locations throughout Galway County.</p>
		            <p><button href="#" class="btn btn-sm dark-pink-btn">Something</button></p>
		        </div>
		    </div>


			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-12 project-counselling-right">

				<!-- <div class="initial visible-sm visible-xs col col-xs-12  col-sm-12 ">
					<img class="ywig-logo-white"  src="http://138.68.182.248/wp-content/uploads/2018/05/listen_logo.png" >
				</div> -->
				<?php   query_posts( array(
					    'category_name'  => 'front-page-counselling',
					    'posts_per_page' => 1
					) );

				 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				   <?php 
					//echo '<p>';
				  	the_content();
				  	//echo '</p>' 
				  	?> 
			
				<?php endwhile; endif; ?>
				
				<?php wp_reset_query(); ?>
		    </div>
		</div><!--end row -->
      </div><!--end container-->
</section>


     
