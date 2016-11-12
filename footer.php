


<!-- START FOOTER SECTION -->
			<section id="footer" class="section section-full-colored">
				<div class="section-content center">
					<p>Edited By Tim KerjAsik- First Design By Juntos - Design & Development by <a href="http://2f-design.fr">2F</a></p>
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

		  var myLatlng = new google.maps.LatLng(-6.402484,106.794241); //YOUR LOCATION -> http://itouchmap.com/latlong.html
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