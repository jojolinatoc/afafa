<?php 
/**
 * Template Name: Contact Us
 */
get_header(); ?>
<div id="primary" class="content-area">
	<div class="container contact-wrapper">
		<div class="row">
			<div class="col-lg-12 page-title">
				<h1 class="text-center">Let's Get In Touch!</h1>
				<hr class="my-4">
			</div>
			<div class="col-lg-8 col-xs-12">
				<p>Please fill out the quick form and we will be in touch with lightning speed.</p>
				<form class="contact-form">
		          <div class="row">
		              <div class="col-lg-6 col-xs-12">
		                <input type="text" required placeholder="Name">
		              </div>     
		              <div class="col-lg-6 col-xs-12">
		                <input type="email" required placeholder="Email">
		              </div> 
		              <div class="col-lg-12">
		                <textarea rows="5" placeholder="Message"></textarea>
		              </div>
		              <div class="container text-center">
		                <button type="submit" class="btn btn-primary btn-xl js-scroll-trigger" href="#">Submit</a>
		              </div>
		          </div>
		        </form>
			</div>
			<div class="col-lg-4 col-xs-12 contact-info">
				<p>Need to talk to someone now about your training needs?</p>
				<p>Call John on 0431 301 872</p>
				<p>For all other queries please call our head office on 08 8596 4243</p>
				<ul class="contact-social">
					<li><h3>Social Media</h3></li>
					<li>
						<a href="https://www.facebook.com/affa.net.au" class="margin-l-sm">
	                     	<i class="fa fa-facebook-square fa-2x mb-3 sr-contact align-middle"></i> 
	                     	<span class="margin-l-sm">Facebook</span>
	                    </a>
					</li>
					<li>
						<a href="https://twitter.com/affatraining" class="margin-l-sm">
	                     	<i class="fa fa-twitter-square fa-2x mb-3 sr-contact align-middle"></i> 
	                     	<span class="margin-l-sm">Twitter</span>
	                    </a>
					</li>
					<li><h3>Email</h3></li>
					<li>
						<i class="fa fa-envelope-o fa-2x mb-3 sr-contact margin-l-sm"></i> 
	                    <span class="align-middle margin-l-sm">info@affa.net.au</span>
                    </li>
				</ul>
			</div>
		</div>
	</div>
	 
</div><!-- #primary -->
<?php get_footer(); ?>