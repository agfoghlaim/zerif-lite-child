<?php
/**
 * The template for displaying custom green row.
 * 
 *
 * @package zerif-lite
 */

?>

<section id="locations" class="locations">
	<div class="location-wrap"></div>
	<div class="ywig-loc-slant"><div></div></div>

    <div class="container">
	
    	<div class="section-header">
    		<div class="row">
				<div class="col-12">
					<p class="text-center"><img src="http://youthworkgalway.ie/wp-content/uploads/2018/06/ywig_tiny_colour.png" class="img-responsive center-block"></p>
				</div>
			</div>
			<h2 class="dark-text">Locations & Projects</h2>
		</div>

			<div class="row ywig-locations-intro">
				<div class="col-sm-6 col-sm-offset-3 col-xs-12">
					<h5 class="text-center">Youth Work Ireland Galway has five locations across Galway city and county.
						 We run a diverse array of projects and activities in each location. Check them out below.
					</h5>
				</div>
			</div>
			
				<ul class="nav nav-pills" id="ywig-locations-nav">
				   <li role="presentation" class="active">
				   		<a href="#prospect-hill" data-toggle="tab">
				   			Prospect Hill
				   		</a>
				   	</li>
				   <li role="presentation">
				   		<a href="#westside" data-toggle="tab">
				   			Westside
				   		</a>
				   	</li>
				   <li role="presentation">
				   		<a href="#loughrea" data-toggle="tab">
				   			Loughrea
				   		</a>
				   	</li>
				   <li role="presentation">
				   		<a href="#tuam" data-toggle="tab">
				   			Tuam
						</a>
				   	</li>
				   	<li role="presentation">
				   		<a href="#ballinasloe" data-toggle="tab">
				   			Ballinasloe
				   		</a>
				   	</li>
				</ul>
	
		<div class="ywig-pills-content container">
			<div class="tab-content">
			   <div class="tab-pane active" id="prospect-hill">
			   	<?php 
					$ywig_slug = 'prospect-hill-projects';
					$ywig_cat_slug = 'prospect-hill-project';
					include(locate_template('ywig_templates/locations/regional_projects.php'));
			   	?>
			   </div>
			   <div class="tab-pane" id="westside">
			   	 	<?php 
			   			$ywig_slug = 'westside-projects';
			   			$ywig_cat_slug = 'westside-project';
			   			include(locate_template('ywig_templates/locations/regional_projects.php'));
			   		?>
			   </div>
			   <div class="tab-pane" id="loughrea">
			   	 	<?php 
			   			$ywig_slug = 'loughrea-projects';
			   			$ywig_cat_slug = 'loughrea-project';
			   			include(locate_template('ywig_templates/locations/regional_projects.php'));
			   		?>		   	
			   </div>
			   <div class="tab-pane" id="tuam">
			   	 	<?php 
			   			$ywig_slug = 'tuam-projects';
			   			$ywig_cat_slug = 'tuam-project';
			   			include(locate_template('ywig_templates/locations/regional_projects.php'));
			   		?>	
			   </div>
			    <div class="tab-pane" id="ballinasloe">
			   	 	<?php 
			   			$ywig_slug = 'ballinasloe-projects';
			   			$ywig_cat_slug = 'ballinasloe-project';
			   			include(locate_template('ywig_templates/locations/regional_projects.php'));
			   		?>	
			   </div>
			</div>
		</div>	
	</div>

</section>