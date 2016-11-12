<?php include 'header.php';?>
		
			<!-- START PAGE SECTION -->
			<section id="single-page" class="section with-arrow">
				<!-- SECTION TITLE -->
				<div class="section-header">
					<div class="container">
						<h1>Event Title</h1>
					</div>
				</div>
				<!-- SECTION CONTENT -->
				<div class="section-content">
					<div class="container">
						<div class="row">
							<!-- event CONTENT -->
							<div class="col-md-9">
								<div class="event-featured">
								    <img src="images/event/gerak_jalan_2.jpg" alt="Featured Image"></a>
							    </div>
							    <div class="event-date">
									<p><span class="icon icon-calendar"></span> December 25, 2013</p>
									<P><span class="icon icon-location"></span> 1600 Pennsylvania Ave NW, Washington, DC</p>
							    </div>
							    <div class="event-content">
								    <p><span class="dropcap">L</span>orem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut tellus sit amet nisl dapibus iaculis. Etiam varius neque justo, id venenatis lorem cursus nec. Pellentesque tincidunt eros sit amet eleifend molestie. Curabitur a diam ligula. Mauris vulputate justo quis sodales eleifend. Curabitur sit amet sem pellentesque, pulvinar quam nec, eleifend lorem. Duis nulla orci, vestibulum vitae semper ac, gravida nec dui. Sed dignissim libero fermentum magna scelerisque eleifend. Duis consectetur bibendum elit, sed viverra ligula fermentum sed. Integer vel magna nec magna volutpat molestie. Nam sit amet rutrum est. Cras lectus mi, ornare sed nulla eget, rutrum venenatis neque. Proin massa diam, posuere ut aliquam ut, consectetur nec diam. Sed euismod lorem dapibus nulla convallis, in fermentum lectus mollis. Nam ultricies condimentum dui a lobortis. Vivamus ultricies venenatis purus.

Nullam sed imperdiet eros. Donec ac vestibulum velit, ut lacinia orci. Cras venenatis vulputate orci, at ultricies tellus faucibus sed. Donec fermentum enim vitae arcu faucibus eleifend. Phasellus urna tortor, molestie vel faucibus in, rhoncus vel metus. Quisque vitae consequat nisi. Duis porttitor diam sit amet ante suscipit, non eleifend est gravida. Aliquam accumsan urna tristique, lobortis magna at, dictum nisi.

Phasellus eleifend vestibulum massa, eu vulputate est tristique at. Curabitur viverra arcu convallis, pharetra nibh mollis, tempus felis. Praesent eu purus et felis condimentum molestie. Sed et ullamcorper urna. Duis vestibulum dui nibh, eget iaculis turpis egestas nec. Donec in tortor hendrerit, consequat odio vitae, placerat metus. Vestibulum eget metus fermentum, tincidunt tellus ut, ultricies est. Praesent iaculis magna justo, nec pretium nisi posuere ut.</p>
							    </div>
							    <div class="event-location">
								    <h2>Event Location</h2>
								    <!-- MAP - JAVASCRIPT BELOW -->
								    <div id="map-canvas"></div>
							    </div>
							    
							</div>
							<!-- SIDEBAR CONTENT -->
							<div class="col-md-3">
					            <!-- EVENTS WIDGET -->
					            <div class="widget">
					              <h3>Upcoming events</h3>
					              <ul class="widget-latests list-unstyled">
					                <li>
					                  <a href="single-event.html"><img src="images/event/2.jpg" alt="Post thumbnail"></a>
					                  <h4>Event Title</h4>
					                  <p>Event short description...
					                  <span><span class="icon icon-calendar"></span> Rendezvous in 3 days</span>
					                  <span><span class="icon icon-location"></span> event location</span></p>
					                  <a href="single-event.html" class="btn btn-default widget-btn">Read More</a>
					                </li>
					                <li>
					                  <a href="single-event.html"><img src="images/event/3.jpg" alt="Post thumbnail"></a>
					                  <h4>Event Title</h4>
					                  <p>Event short description...
					                  <span><span class="icon icon-calendar"></span> Rendezvous in 27 days</span>
					                  <span><span class="icon icon-location"></span> event location</span></p>
					                  <a href="single-event.html" class="btn btn-default widget-btn">Read More</a>
					                </li>
					                <li>
					                  <a href="single-event.html"><img src="images/event/4.jpg" alt="Post thumbnail"></a>
					                  <h4>Event Title</h4>
					                  <p>Event short description...
					                  <span> <span class="icon icon-calendar"></span> Rendezvous in 46 days</span>
					                  <span><span class="icon icon-location"></span> event location</span></p>
					                  <a href="single-event.html" class="btn btn-default widget-btn">Read More</a>
					                </li>
					              </ul>
					            </div><!-- END .WIDGET -->
					            <!-- DONATION WIDGET -->
					            <div class="widget">
					              <h3>Yes, you can help us now</h3>
					              <a href="index.html#donation" class="btn btn-default widget-btn">Make a Donation</a>
					            </div><!-- END .WIDGET -->
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END TEAM SECTION -->
			
			<!-- START FOOTER SECTION -->
			<section id="footer" class="section section-full-colored">
				<div class="section-content center">
					<p>Juntos - Design & Development by <a href="http://2f-design.fr">2F</a></p>
				</div>
			</section>
			<!-- END FOOTER SECTION -->
		
		</div>
		<!-- END MAIN CONTAINER -->
		
		<!-- PAGE LOADING-->
		<div id="loader"></div>
  	</div>
    <!-- SCRIPTS -->
    <!-- ONLY FOR THE MAP START-->
    <!-- ONLY FOR THE MAP END-->
    <script>
		function initialize() {

		  var myLatlng = new google.maps.LatLng(48.858229,2.294388); //YOUR LOCATION -> http://itouchmap.com/latlong.html
		  var mapOptions = {
		    zoom: 6,
		    center: myLatlng
		  }
		  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		
		  var marker = new google.maps.Marker({
		      position: myLatlng,
		      map: map,
		      title: 'Hello World! Your Location'
		  });
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	<script src="js/jquery.sequence-min.js"></script>
	<script src="js/alert.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.smoothscroll.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/custom.js"></script>
  </body>
  <!-- END BODY -->
</html>