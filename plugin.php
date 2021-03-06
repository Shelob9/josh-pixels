<?php
/*
Plugin Name: Josh's Pixels Etc.
Version: 0.1.1
Description: Josh's FB/Twitter Tracking pixels
 */
add_action( 'wp_head', function(){
	?>
	<!-- Facebook Pixel Code (Josh's FB) -->
	<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
			document,'script','//connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1629162624024594');
		fbq('track', "PageView");</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1629162624024594&ev=PageView&noscript=1"/></noscript>
	<!-- End Facebook Pixel Code -->
	<!-- Twitter visit Tracking (Josh's Twitter) -->
	<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
	<script type="text/javascript">twttr.conversion.trackPid('nu2qd', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
	<noscript>
		<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=nu2qd&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
		<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=nu2qd&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
	</noscript>
<?php
});
