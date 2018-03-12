<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package afafa
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-dark text-white">
		<div class="container">
        <div class="row">
          <div class="col-lg-4 col-xs-12">
            <h3>Quick links</h3>
            <ul class="footer-quick-links zero-padding">
                <li class="full-width">
                  <a class="js-scroll-trigger" href="/courses-for-individuals">Courses for Individuals</a>
                </li>
                <li class="full-width">
                  <a class="js-scroll-trigger" href="/corporate-group-training">Corporate & Group Training</a>
                </li>
                <li class="full-width">
                  <a class="js-scroll-trigger" href="/book-now">Book Now</a>
                </li>
                <li class="full-width">
                  <a class="js-scroll-trigger" href="/faq">FAQ</a>
                </li>
                <li class="full-width">
                  <a class="js-scroll-trigger" href="/contact-us">Contact Us</a>
                </li>
                <li class="full-width">
                  <a class="js-scroll-trigger" href="/blog">Blog</a>
                </li>
              </ul>
          </div>
          <div class="col-lg-4 col-xs-12">
             <h3>Contact Us</h3>
             <ul class="footer-quick-links zero-padding">
                <li class="full-width">
                   <i class="fa fa-phone fa-2x mb-3 sr-contact align-middle"></i> 
                  <span class="align-middle contact-detail">(08) 8596 4243</span>
                </li>
                <li class="full-width">
                    <i class="fa fa-envelope-o fa-2x mb-3 sr-contact align-middle"></i> 
                    <span class="align-middle contact-detail">info@affa.net.au</span>
                </li>
              </ul>
          </div>
          <div class="col-lg-4 col-xs-12">
            <h3>Like Us on:</h3>
             <ul class="footer-quick-links zero-padding">
                <li class="full-width">
                   <a href="https://www.facebook.com/affa.net.au" class="margin-l-sm">
                     <i class="fa fa-facebook-square fa-2x mb-3 sr-contact align-middle"></i> 
                   </a>
                   <a href="https://twitter.com/affatraining" class="margin-l-sm">
                     <i class="fa fa-twitter-square fa-2x mb-3 sr-contact align-middle"></i> 
                   </a>
                </li>
              </ul>
          </div>
        </div>
      </div>
      <div class="copyright">
          <div class="container text-center">
              <div class="col-lg-12">
                  <p>Copyright ©2018 Australian Fire & First Aid | All Rights Reserved</p>
              </div>
          </div>
      </div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<script type="text/javascript">
	(function() {
        [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {  
          new SelectFx(el);
        } );
      })();
	window.onscroll = function() {stickyMenu()};
      var navbar = document.getElementById("mainNav");
      var sticky = navbar.offsetTop;
      function stickyMenu() {
          if (window.pageYOffset >= sticky) {
              navbar.classList.add("sticky-top")
          } else {
              navbar.classList.remove("sticky-top");
          }
      }
</script>
</html>
