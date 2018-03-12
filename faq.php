<?php 
/**
 * Template Name: FAQ
 */
get_header(); ?>

<div id="primary" class="content-area">
	<div class="container courses-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-center">Frequently Asked Questions</h1>
				<hr class="my-4">
			</div>
		</div>
	</div>
	<div class="container faq-wrapper">
		  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		    <div class="panel panel-default">
		      <div class="panel-heading" role="tab" id="heading1">
		        <h5 class="panel-title">
		        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
		          How many people do I need for a group booking?
		        </a>
		      </h5>
		      </div>
		      <div id="collapse1" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="heading1">
		        <div class="panel-body">
		          A minimum of four participants are required for a private course booking, a maximum of 20 students are permitted per course. Multiple trainers are available to deliver to large groups of 20+ simultaneously
		        </div>
		      </div>
		    </div>
		    <div class="panel panel-default">
		      <div class="panel-heading" role="tab" id="heading2">
		        <h5 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
		          How often do I need to update my training?
		        </a>
		      </h5>
		      </div>
		      <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
		        <div class="panel-body">
		          Qualification periods vary from course to course, you can find the information in the downloadable course PDF’s (located on each course page)
		        </div>
		      </div>
		    </div>
		    <div class="panel panel-default">
		      <div class="panel-heading" role="tab" id="heading3">
		        <h5 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
		          I can’t find the course I want?
		        </a>
		      </h5>
		      </div>
		      <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
		        <div class="panel-body">
		          There are a number of courses we deliver which are not listed on our website, please contact our sales team for more information
		        </div>
		      </div>
		    </div>

		    <div class="panel panel-default">
		      <div class="panel-heading" role="tab" id="heading5">
		        <h5 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
		          Is training compulsory?
		        </a>
		      </h5>
		      </div>
		      <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
		        <div class="panel-body">
		         It most cases yes, training is required under WHS or because of an Australian Standard or policy your industry is governed by. If you would like more information on training requirements please contact a member of our team or <a href="https://www.safeworkaustralia.gov.au/">SAFEWORK AUSTRALIA</a>
		        </div>
		      </div>
		    </div>

		    <div class="panel panel-default">
		      <div class="panel-heading" role="tab" id="heading6">
		        <h5 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
		          What happens if I can’t make my course?
		        </a>
		      </h5>
		      </div>
		      <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
		        <div class="panel-body">
			        <p class="font-bold">Individuals</p>
			        <p>Cancellations made 7 days in advance or more will attract a full refund</p>
			        <p>Cancellations made less than 7 prior to booking date will attract a 50% cancellation fee</p><br>
			        <p class="font-bold">Groups</p>	
			        <p>Rebooking or change of course date is permitted 7 days or more in advance</p>
			        <p>Rebooking or change of date required 7 days or less from original booking date may attract a rebooking or cancellation fee, please speak to your account manager for terms and conditions</p>
		        </div>
		      </div>
		    </div>

		    <div class="panel panel-default">
		      <div class="panel-heading" role="tab" id="heading7">
		        <h5 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
		          Do you accept Credit Card payments?
		        </a>
		      </h5>
		      </div>
		      <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
		        <div class="panel-body">
		         Yes we have a merchant facility and can accept credit card payments
		        </div>
		      </div>
		    </div>

		    <div class="panel panel-default">
		      <div class="panel-heading" role="tab" id="heading8">
		        <h5 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
		          I want to book online but don’t have a credit card, can I still book?
		        </a>
		      </h5>
		      </div>
		      <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
		        <div class="panel-body">
		         Please email our booking team using the contact tab above, we can provide you with our bank details, deposits can be made at Australia Post. We will enrol you into your chosen course once your payment has been confirmed
		        </div>
		      </div>
		    </div>

		  </div>
		</div>
	</div> 
</div><!-- #primary -->
<script type="text/javascript">
	$(function() {
		function toggleIcon(e) {
		$(e.target)
			.prev('.panel-heading')
			.find(".plus-minus")
			.toggleClass('glyphicon-plus glyphicon-minus');
		}
		$('.panel-group').on('hidden.bs.collapse', toggleIcon);
		$('.panel-group').on('shown.bs.collapse', toggleIcon);
	});
</script>
<?php get_footer(); ?>