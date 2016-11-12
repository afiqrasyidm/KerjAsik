<?php include 'header.php';?>

	<!-- START CONTACT SECTION -->
	<section id="contact" class="section with-arrow">
		<!-- SECTION TITLE -->
		<div class="section-header with-arrow">
			<h1>Let's Get In Touch</h1>
			<hr>
		</div>
		<!-- SECTION CONTENT -->
		<div class="section-content">
			<div class="container">
				<div class="row">	
					<!-- CONTACT TEXT -->
					<div class="col-md-6">
						<p>Sed vehicula vel nulla a interdum. Etiam bibendum urna sed sapien eleifend dictum. 
						Ut adipiscing sit amet diam quis ornare. Morbi ultricies venenatis tempus. Vestibulum eget condimentum tellus.</p>
						<!-- SOCIAL BUTTTONS -->
						<ul class="social-list">
							<li><a href="#" class="btn btn-facebook"><span class="icon icon-facebook"></span> Like our Page on Facebook</a></li>
							<li><a href="#" class="btn btn-twitter"><span class="icon icon-twitter"></span> Follow us on Twitter</a></li>
							<li><a href="#" class="btn btn-google"><span class="icon icon-google-plus"></span> Follow us on Google +</a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<!-- CONTACT FORM -->
						<form class="form-horizontal" method="post" action="index.php" id="form">
						  <div class="form-group">
							<label for="contact_name" class="col-lg-2 control-label">Name</label>
							<div class="col-lg-10">
							  <input type="text" class="form-control" name="contact_name">
							</div>
						  </div>
						  <div class="form-group">
							<label for="contact_email" class="col-lg-2 control-label">Email</label>
							<div class="col-lg-10">
							  <input type="email" class="form-control" name="contact_email">
							</div>
						  </div>
						  <div class="form-group">
							<label for="contact_textarea" class="col-lg-2 control-label">Message</label>
							<div class="col-lg-10">
							  <textarea class="form-control" rows="3" name="contact_textarea"></textarea>
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-lg-offset-2 col-lg-10">
							  <input type="hidden" name="submitted" id="submitted" value="true" />
							  <button type="submit" class="btn btn-default btn-send" name="submitted"><i data-icon="&#xe00d;"></i>Send</button>
							</div>
						  </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END CONTACT SECTION -->
	
<?php include 'footer.php';?>