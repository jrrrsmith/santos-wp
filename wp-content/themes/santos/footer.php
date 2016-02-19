</section> <!-- END OF BODY -->
		<footer>
			<div class="wrap">
				<div class="newsletter">
					<input placeholder="Email Address"></input>
					<a href="#">Sign Up For Our Newsletter</a>
				</div> <!-- END OF NEWSLETTER -->
				<nav>
					<ul>
						<li><a href="">
							<svg class="icon icon-facebook2"><use xlink:href="#icon-facebook2"></use></svg>
						</a></li>
						<li><a href="">
							<svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg>
						</a></li>
						<li><a href="">
							<svg class="icon icon-twitter2"><use xlink:href="#icon-twitter2"></use></svg>
						</a></li>
						<li><a href="">
							<svg class="icon icon-tumblr2"><use xlink:href="#icon-tumblr2"></use></svg>
						</a></li>
					</ul>
				</nav>
			</div> <!-- END OF WRAP -->
		</footer>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/html5lightbox/html5lightbox.js"></script>
		<script src="<?php bloginfo('template_url');?>/js/flip.js"></script>
		<script src="<?php bloginfo('template_url');?>/js/main.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script>
		  var bittersMap = (function () {
		    var myLatlng = new google.maps.LatLng(40.717683, -74.001462),
		        mapCenter = new google.maps.LatLng(40.717683, -74.001462),
		        mapCanvas = document.getElementById('map_canvas'),
		        mapOptions = {
		          center: mapCenter,
		          zoom: 17,
		          scrollwheel: false,
		          draggable: true,
		          disableDefaultUI: true,
		          mapTypeId: google.maps.MapTypeId.ROADMAP,
		          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"transit","elementType":"labels.icon","stylers":[{"hue":"#e71f29"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#000000"},{"visibility":"on"}]}]
		        },
		        map = new google.maps.Map(mapCanvas, mapOptions),
		        contentString =
		          '<div id="content">'+
		          '<div id="siteNotice">'+
		          '</div>'+
		          '<h1 id="firstHeading" class="firstHeading">Santos Party House</h1>'+
		          '<div id="bodyContent"'+
		          '<p>96 Lafayette St.</p>'+
		          '</div>'+
		          '</div>',
		        infowindow = new google.maps.InfoWindow({
		          content: contentString,
		          maxWidth: 300
		        }),
		        marker = new google.maps.Marker({
		          position: myLatlng,
		          map: map,
		          title: 'Santos Party House',
		          icon: new google.maps.MarkerImage(
		          	'../wp-content/themes/santos/images/tran-san.png',
		          	null, /* size is determined at runtime */
								null, /* origin is 0,0 */
								null, /* anchor is bottom center of the scaled image */
								new google.maps.Size(40, 85)
		          	 )
		        });

		    return {
		      init: function () {
		        google.maps.event.addListener(marker, 'click', function () {
		          infowindow.open(map,marker);
		        });
		      }
		    };
		  }());

		  bittersMap.init();
		</script>
	</body>
</html>