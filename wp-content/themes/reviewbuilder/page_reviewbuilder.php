<?php
/*
	Template Name: Review Builder
*/
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title(''); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url') ?>/inc/reviewbuilder/css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:800,300,400,700' rel='stylesheet' type='text/css'>
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>
<body>

<div id="wrapper">
	
	<div class="header clearfix">
		<div class="logo">
			<img src="<?php bloginfo('template_url') ?>/inc/reviewbuilder/images/logo.jpg" alt="logo" width="110" height="58">
		</div><!-- .logo -->
		<div class="callus">
			Lowest Rates in San Diego!
		</div><!-- .callus -->
	</div><!-- .header -->
	
	<div class="hero_banner">
		<div class="vertically_aligned">
				<h1>Lorem Ipsum Dolor</h1>
				<div><a class="anchor_btn smooth-anchor" href="#">RATE OUR SERVICE</a></div>
				<div><a class="arrow smooth-anchor" href="#"><img src="<?php bloginfo('template_url') ?>/inc/reviewbuilder/images/down_arrow.png" alt="down_arrow" width="35" height="35"></a></div>
				
		</div><!-- .vertically_aligned_inner -->
		<img class="banner" src="<?php bloginfo('template_url') ?>/inc/reviewbuilder/images/hero_banner.jpg" alt="hero_banner" width="1031" height="378">
	</div><!-- .hero_banner -->
	<div id="reviewus"></div>
	<div class="reviews_wrap">
		<div class="vertically_aligned">
			<h2 class="prompt">How likely is it that you would<br> recommend SD Jet Ski to a friend ?</h2>
			<div class="stars">
					<input type="radio"  tabindex="1" id="choice_4_0" value="1star"  class="star-1 star">
					<label for="choice_4_0" class="star-1"></label>
					<input type="radio"  tabindex="2" id="choice_4_1" value="2star"   class="star-2 star">
					<label for="choice_4_1" class="star-2"></label>
					<input type="radio"  tabindex="3" id="choice_4_2" value="3star"  class="star-3 star">
					<label for="choice_4_2" class="star-3"></label>
					<input type="radio"  tabindex="4" id="choice_4_3" value="4star"  class="star-4 star">
					<label for="choice_4_3" class="star-4"></label>
					<input type="radio"  tabindex="5" id="choice_4_4" value="5star"  class="star-5 star">
					<label for="choice_4_4" class="star-5"></label>
					<span></span>
			</div> <!-- .stars -->
		</div><!-- .vertically_aligned -->
	</div><!-- .reviews_wrap -->
	<div class="footer">
		<a href="" target="_blank">Back to sdjetski.com</a><br>
		<span>4275 Mission Bay Dr San Diego, CA 92109</span>
	</div>
</div><!-- #wrapper -->
	<div class="switch">
		<div class="overlay-inner">
			<a class="trigger-overlay close menu-overlay" style="display: none"><span>Close</span></a>
			<div class="cform-wrap">
				<div class="cta">
					<p>I'm sorry to hear that you did not have a pleasant experience at SD Jetski.  Our goal is to provide you with the finest customer service and leave you with a memorable experience. We would love to hear your feedback, and we will do everything that we can to resolve any issues. We value your comments and feedback. <br>
- SDJetski Management</p>
				</div><!-- .cta -->
	
				<div class="cform">
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
				</div><!-- .cform -->
			</div><!-- .cform-wrap -->	
			<div class="review-sites">
				<div class="cta">
					<p>Please pick your review site of choice and take a quick moment to write us a review. Tell us about your experience!</p>
					<p>We appreciate and value your feedback</p>
					<hr>
				</div>
				<div>
					<a href="#" class="social-icon facebook"></a>
					<a href="#" class="social-icon google"></a>
					<a href="#" class="social-icon yelp"></a>
				</div>
			</div><!-- .review-sites -->
		</div>
	</div>
	
<script type="text/javascript">

	jQuery(document).ready(function () {
		jQuery( "input#choice_4_3" ).removeProp("checked");
		jQuery( "input#choice_4_4" ).removeProp("checked");
		jQuery( "input#choice_4_0" ).removeProp("checked");
		jQuery( "input#choice_4_1" ).removeProp("checked");
		jQuery( "input#choice_4_2" ).removeProp("checked");
		
		jQuery(".hero_banner").css({
  	    "height": jQuery(".hero_banner img.banner").height()
  	});
  	
	  jQuery(".stars label").click(function(){
  	  jQuery(".stars,h2.prompt ").hide(function() {
				jQuery("div.block").fadeIn(400);
		});
		
  });
  
	jQuery(".stars label,.trigger-overlay.close").click(function(){
		jQuery(".switch").addClass("overlay").removeClass("switch").show();
		jQuery(".overlay").toggleClass("open");
		jQuery(".trigger-overlay.close").show()
		jQuery(".gform-wrap").removeClass("expand")
		jQuery(".deals-cta").show()
	});
	
	jQuery(".smooth-anchor").click(function(){
		jQuery('html, body').delay(500).animate({
			scrollTop: jQuery('#reviewus').offset().top
		}, 1000);
	});
			
	//hide the stars after click

	jQuery(".stars label").click(function(){
		jQuery( ".reviews_wrap .vertically_aligned" ).append("<h2>Thank you!</h2>")
	});
	

	jQuery(".stars label.star-1").click(function(){
    jQuery(".cform-wrap").fadeIn();
    //jQuery("input.gform_hidden" ).val(jQuery("input.star-1").val());
  });

	jQuery(".stars label.star-2").click(function(){
    jQuery(".cform-wrap").fadeIn();
    //jQuery("input.gform_hidden" ).val(jQuery("input.star-2").val());
  });
	jQuery(".stars label.star-3").click(function(){
    jQuery(".cform-wrap").fadeIn();
    //jQuery("input.gform_hidden" ).val(jQuery("input.star-3").val());
  });
  
	jQuery(".stars label.star-4").click(function(){
    jQuery(".review-sites").fadeIn();
    //jQuery("input.gform_hidden" ).val(jQuery("input.star-4").val());
  });
  jQuery(".stars label.star-5").click(function(){
    jQuery(".review-sites").fadeIn();
    //jQuery("input.gform_hidden" ).val(jQuery("input.star-5").val());
  });
  // tie in submit button to jquery event

			jQuery(document).bind('gform_confirmation_loaded', function(event, form_id){
				//jQuery('#ratingsForm').show();
				jQuery('.cform-wrap .cta').fadeOut();
				//jQuery('#form-wrap-coupon1,#form-wrap-coupon2,#ratingsForm').addClass('wide');
			});
  	
  	
});


jQuery(window).resize(function() {  

  jQuery(".hero_banner").css({
      "height": jQuery(".hero_banner img.banner").height()
  });
  jQuery(".reviews_wrap").css({
      "height": jQuery(".reviews_wrap img.banner").height()
  });
});
</script>
<?php wp_footer(); ?>
</body>
</html>