<?php
/**
 * Template name: Home
 */

get_header();
?>

	<div id="primary" class="content-area">
		<header class="masthead text-white d-flex">
	      <div class="container my-auto">
	        <div class="row text-center">
	          <div class="col-lg-9 mx-auto">
	            <h1 class="text-uppercase">
	              <strong>Enjoyable Fire and First Aid Training</strong>
	              <p>Delivered by Passionate Industry Experts</p>
	            </h1>
	            <hr>
	          </div>
	          <div class="col-lg-12 text-center mx-auto book-now">
	            <div class="row">
	              <!--<div class="col-lg-3 col-xs-12 book-here">
	                <p class="font-bold">BOOK ONLINE HERE</p>
	                <span>Fire And First Aid Course Selector</span>
	              </div>
	              <div class="col-lg-3 col-xs-12">
	                  <select class="cs-select cs-skin-border">
	                    <option value="" disabled selected>Select category</option>
	                    <option value="email">Open Learning for Individuals</option>
	                    <option value="twitter">Corporate & Group Training</option>
	                    <option value="linkedin">Safety Services</option>
	                  </select>
	              </div>
	              <div class="col-lg-3 col-xs-12">
	                  <select class="cs-select cs-skin-border">
	                    <option value="" disabled selected>Select Course</option>
	                    <option value="email">First Aid Course</option>
	                    <option value="twitter">Fire Training Course</option>
	                  </select>
	              </div>-->
	              <div class="col-lg-3 col-xs-12 mx-auto">
	                <a class="btn btn-primary btn-xl js-scroll-trigger" href="/book-now">Book now!</a>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </header>

	    <section class="bg-primary section-wrapper">
	      <div class="container">
	        <div class="row">
	          <div class="col-lg-8 mx-auto text-center">
	            <h2 class="section-heading text-white">Why choose us?</h2>
	            <hr class="light my-4">
	            <p class="text-faded mb-4">At Australian Fire and First Aid we specialise in tailored corporate and group training solutions. To us, tailoring means a whole lot more than just adding your logo to a standard training program. We can include your company policies and procedures into our course to ensure the paperwork and work flow of incidents are correctly carried out and documented.  We deliver all nationally accredited courses above and beyond national standard but what we most excel at, is creating custom courses to meet your needs. Our multi skilled team ensures that your training and safety requirements are not just met, but exceeded.</p><br>
	            <p class="text-faded mb-4">In addition to providing training services throughout Australia and South East Asia, we provide safety and fire auditing services, WHS consulting for newly formed and progressive ECO’s and complimentary safety services such as electrical tagging and testing, evacuation diagrams, Extinguisher Servicing and more, please search the menu on the right for more information.</p><br>
	            <p></p>
	            <a class="btn btn-light btn-xl js-scroll-trigger" href="/courses-for-individuals">View Courses</a>
	          </div>
	        </div>
	      </div>
	    </section>

	    <section id="services" class="section-wrapper">
	      <div class="container">
	        <div class="row">
	          <div class="col-lg-12 text-center">
	            <h2 class="section-heading">We Offer</h2>
	            <hr class="my-4">
	          </div>
	        </div>
	      </div>
	      <div class="container">
	        <div class="row">
	          <div class="col-lg-4 col-md-12 text-center">
	          	<a href="/courses-for-individuals">
		            <div class="service-box mt-5 mx-auto">
		              <i class="fa fa-4x fa-user text-primary mb-3 sr-icons"></i>
		              <h3 class="mb-3">Open Learning for Individuals</h3>
		              <p class="text-muted mb-0">We use a combined delivery method for our first aid courses and fire training courses, this means that students leave and arrive throughout the day and stay for only the portion they require.</p>
		            </div>
	            </a>
	          </div>
	          <div class="col-lg-4 col-md-12 text-center">
	          	<a href="/corporate-group-training">
		            <div class="service-box mt-5 mx-auto">
		              <i class="fa fa-4x fa-users text-primary mb-3 sr-icons"></i>
		              <h3 class="mb-3">Corporate & Group Training</h3>
		              <p class="text-muted mb-0">We like to make all our training as enjoyable as possible for everyone. But it doesn't mean we don't take safety seriously. Our courses are enjoyable because they are delivered by passionate industry experts who enjoy their work as much as you do.</p>
		            </div>
	            </a>
	          </div>
	          <div class="col-lg-4 col-md-12 text-center">
		        <a href="#">
		            <div class="service-box mt-5 mx-auto">
		              <i class="fa fa-4x fa-exclamation-triangle text-primary mb-3 sr-icons"></i>
		              <h3 class="mb-3">Safety<br>Services</h3>
		              <p class="text-muted mb-0">At Australian Fire & First Aid we provide all of your safety needs in one place from servicing your extinguishers to training your staff.</p>
		            </div>
		         </a>
	          </div>
	        </div>
	      </div>
	    </section>
	    <div class="container">
		    <div class="row">
		      <div class="col-lg-12 text-center">
		        <h2 class="section-heading">Available Courses</h2>
		        <hr class="my-4">
		      </div>
		    </div>
		  </div>
		  <div class="container" id="courses">
		    <?php
			    global $wpdb;
			    $result = $wpdb->get_results ( "SELECT * FROM wp_ab_services" );
			    foreach ( array_slice($result, 0, 6) as $courses )   {
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
		   				<p class="text-center"><?php echo $courses->price;?>AU$</p>
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
	    <div class="bg-dark text-white more-courses">
	      <div class="container text-center">
	        <a class="btn btn-light btn-xl sr-button" href="/courses-for-individuals">More Courses...</a>
	      </div>
	    </div>

	    <section class="bg-primary section-wrapper">
	      <div class="container">
	        <div class="row">
	          <div class="col-lg-8 mx-auto text-center">
	            <h2 class="section-heading text-white">You can Trust us</h2>
	            <hr class="light my-4">
	            <p class="text-faded mb-4">Australian Fire & First Aid delivers accredited training under the auspices of Safety Corp RTO #91694, Parasol EMT Pty.Ltd RTO #2551 or First Aid Advantage RTO #32273’</p> 
	          </div>
	        </div>
	      </div>
	    </section>
	    <!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
