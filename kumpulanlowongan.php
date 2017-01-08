<?php include 'header.php';?>
	<!-- START PAGE SECTION -->
			<section id="single-page" class="section with-arrow">
				<!-- SECTION TITLE -->
				<div class="section-header">
					<div class="container">
						<h1>Pekerjaan Asik</h1>
					</div>
				</div>
				
				
	<?php
	
	
				/*	$conn = connectDB();
				
					$sql = "SELECT * FROM Pekerjaan_Asik order by id desc";
					$sql1 = "SELECT COUNT(*) FROM Pekerjaan_Asik ";
					
					$result = $conn->query($sql);
					$result1=$conn->query($sql1);
						if ( mysqli_num_rows($result) > 0) {
							// output data of each row
									$count = 0;
									$countPost=0;
								$row1= mysqli_fetch_assoc($result1);
								$jumlahPost=$row1;
							while($row = mysqli_fetch_assoc($result)) {
									
								
			


						
						
				
								if($count%3==0){
									echo "<div class='section-content'>";
										echo "<div class='container'>";
											echo "<div class='flexslider events-slider'>";
												echo "<ul class='slides'>";
												
												
								}				
								$countPost++;
												echo	"<li>";
													echo  "<div class='slide'>";
													echo 	"<div class='event'>";
														echo 	"<div class='event-header'>";
															echo 	"<a href='single-event.php'>";
															echo 	"<img  class='images' src='images/".$row["foto_iklan"]."' alt='Gambar'>";

													
													//			echo 	"<img  class='images' src='./images/event/gerak_jalan.jpg' alt='Gambar'>";//
																echo 	"</a>";
																echo "</div>";
															echo 	"<div class='event-content'>";
															echo 		"<h3>".$row["judul"]."</h3>";
															
															

															
															
															//		echo 	"<img  class='images' src='images/".$row["foto_iklan"]."' alt='Gambar'>";
														
														
															
															
															
															
															
															
															
															echo 		"<div class='event-data'>";
															echo 			"<p><span class='icon icon-calendar'></span>".$row["tanggal_tutup_daftar"]."</p>";
															echo 			"<p><span class='icon icon-location'></span> ".$row["lokasi"]."</p>";
															
															
															echo 			"<p><span class='fa fa-money ' aria-hidden='true'></span>100rb/hari</p>";

															echo 		"</div>";
															
															
															
																
															
															
															$snippet= substr($row["deskripsi"], 0, 100);
															
															
															
															echo 		"<p>".$snippet."</p>";
															echo 		"<div class='center'>";
															echo 			"<a href='single-event.php' class='btn btn-default'>Read More</a>";
															echo 		"</div>";
															echo 	"</div>";
														
														
														
														
														echo 	"</div>";
														
														
															
														
														
													echo 	"</div>";
													
													
															
															
												echo 	"</li>";
												
									if($countPost%3 == 0 ){		
												echo	"</ul>";
											echo	"</div>";
										echo	"</div>";
									echo	"</div>"	;	
									$countPost=0;
								}	
								
								$count++;
							}
					
						} 
							else {
						//	echo "0 results";
						}
						mysqli_close($conn);
						*/
		?>
		
		
									<div class="section-content">
										 <div class="container">
											 <div class="flexslider events-slider">
												 <ul class="slides">
												
												
													<li>
													  <div class="slide">
													 	<div class="event">
														 	<div class="event-header">
																<a href="single-event.php">
																	<img src="images/event/gerak_jalan_2.jpg" alt="Blog cover">
																</a>			
													
										
															</div>
															 	
																<div class="event-content">
																	<!-- TITLE -->
																	<h3>Gerak Jalan Santai Bersama Depok Mie</h3>
																	<!-- DATE -->
																	<div class="event-data">
																		<p><span class="icon icon-clock"></span> 25 Desember 2013</p>
																		<p><span class='icon icon-location'></span>Depok</p>
																		<p><span class='fa fa-money ' aria-hidden='true'></span>100rb/hari</p>
																	</div>
																	<!-- CONTENT -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec placerat sem. 
																	Vestibulum vel tristique purus. In hac habitasse platea dictumst. Suspendisse eget pellentesque dui...</p>
																	<div class="center">
																		<a href='single-event.php' class='btn btn-default'>Read More</a>
																	</div>
																</div>
							
		
														
														 </div>
														
														
															
														
														
													 	</div>
													
													
															
															
												 	</li>
										
										
										
										
										
								
												
												
													<li>
													  <div class="slide">
													 	<div class="event">
														 	<div class="event-header">
																<a href="single-event.php">
																	<img src="images/event/pembersihan_sungai.jpg" alt="Blog cover">
																</a>			
													
										
															</div>
															 	
																<div class="event-content">
																	<!-- TITLE -->
																	<h3>Pembersihan Kali Ciliwung</h3>
																	<!-- DATE -->
																	<div class="event-data">
																		<p><span class="icon icon-clock"></span> 25 Desember 2013</p>
																		<p><span class='icon icon-location'></span>Depok</p>
																		<p><span class='fa fa-money ' aria-hidden='true'></span>100rb/hari</p>
																	</div>
																	<!-- CONTENT -->
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec placerat sem. 
																	Vestibulum vel tristique purus. In hac habitasse platea dictumst. Suspendisse eget pellentesque dui...</p>
																	<div class="center">
																		<a href='single-event-sungai.php' class='btn btn-default'>Read More</a>
																	</div>
																</div>
							
		
														
														 </div>
														
														
															
														
														
													 	</div>
													
													
															
															
												 	</li>
											
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
		
		
												
												
													<li>
													  <div class="slide">
													 	<div class="event">
														 	<div class="event-header">
																<a href="single-event.php">
																	<img src="images/event/1000pohon.jpg" alt="Blog cover">
																</a>			
													
										
															</div>
															 	
															<div class="event-content">
																<!-- TITLE -->
																<h3>Aksi Tanam 1000 Pohon di Bali</h3>
																<!-- DATE -->
																<div class="event-data">
																	<p><span class="icon icon-clock"></span> 25 Desember 2013</p>
																	<p><span class='icon icon-location'></span>Bali</p>
																	<p><span class='fa fa-money ' aria-hidden='true'></span>100rb/hari</p>
																</div>
																<!-- CONTENT -->
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec placerat sem. 
																Vestibulum vel tristique purus. In hac habitasse platea dictumst. Suspendisse eget pellentesque dui...</p>
																<div class="center">
																	<a href='single-event.php' class='btn btn-default'>Read More</a>
																</div>
															</div>
														
														
														 	</div>
														
														
															
														
														
													 	</div>
													
													
															
															
												 	</li>
												
													</ul>
												</div>
											</div>
										</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
									<div class="section-content">
										 <div class="container">
											 <div class="flexslider events-slider">
												 <ul class="slides">
												
												
													<li>
													  <div class="slide">
													 	<div class="event">
														 	<div class="event-header">
																<a href="single-event.php">
																	<img src="images/event/gerak_jalan.jpg" alt="Blog cover">
																</a>			
													
										
															</div>
															 	
															<div class="event-content">
																<!-- TITLE -->
																<h3>Gerak Jalan Santai di Depok</h3>
																<!-- DATE -->
																<div class="event-data">
																	<p><span class="icon icon-clock"></span> 25 Desember 2013</p>
																	<p><span class='icon icon-location'></span>Bali</p>
																	<p><span class='fa fa-money ' aria-hidden='true'></span>100rb/hari</p>
																</div>
																<!-- CONTENT -->
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec placerat sem. 
																Vestibulum vel tristique purus. In hac habitasse platea dictumst. Suspendisse eget pellentesque dui...</p>
																<div class="center">
																	<a href='single-event.php' class='btn btn-default'>Read More</a>
																</div>
															</div>
														
														
														 	</div>
														
														
															
														
														
													 	</div>
													
													
															
															
												 	</li>
												
													</ul>
												</div>
											</div>
										</div>
		
															
			
			</section>
			<!-- END TEAM SECTION -->
<?php include 'footer.php';?>