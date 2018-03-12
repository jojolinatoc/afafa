<?php 
/**
 * Template Name: Individual Courses
 */
get_header(); ?>
<div id="primary" class="content-area">
	<div class="container courses-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-center">Courses</h1>
				<hr class="my-4">
			</div>
		</div>
	</div>
	<section class="p-0" id="courses">
	  <div class="container">
	    <?php
		    global $wpdb;
		    $result = $wpdb->get_results ( "SELECT * FROM wp_ab_services  WHERE category_id = '1'" );
		    foreach ( $result as $courses )   {
	    ?>
	    	<div class="row courses-list">
			    <div class="col-lg-3 col-xs-12">
	   				<h5 class="course-name">Course Name</h5>
	   				<p><?php echo $courses->title;?></p>
	   			</div>
	   			<div class="col-lg-5 col-xs-12">
	   				<h5 class="course-name">Course Details</h5>
	   				<p><?php echo $courses->info;?></p>
	   			</div>
			    <div class="col-lg-2 col-xs-12">
	   				<h5 class="text-center course-name">Course Price</h5>
	   				<p class="text-center"><?php echo $courses->price;?>A$</p>
	   			</div>
	   			<div class="col-lg-2 col-xs-12 text-center">
	   				<a class="btn btn-primary btn-md js-scroll-trigger book-now-btn" href="/book-now">
	   					Book now!
	   				</a>
	   			</div>
   			</div>
	      <?php
	      }
	  	  ?>  
	  </div>
	</section>
</div><!-- #primary -->
<?php get_footer(); ?>