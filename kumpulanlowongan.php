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
	
	
					$conn = connectDB();
				
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
															echo 	"<a href='single-event.html'>";
																echo 	"<img  class='images' src='./uploads/".$row["foto_iklan"]."' alt='Gambar'>";
																echo 	"</a>";
																echo "</div>";
															echo 	"<div class='event-content'>";
															echo 		"<h3>".$row["judul"]."</h3>";
															echo 		"<div class='event-data'>";
															echo 			"<p><span class='icon icon-calendar'></span>".$row["tanggal_tutup_daftar"]."</p>";
															echo 			"<p><span class='icon icon-location'></span> ".$row["lokasi"]."</p>";
															echo 		"</div>";
															echo 		"<p>".$row["deskripsi"]."</p>";
															echo 		"<div class='center'>";
															echo 			"<a href='single-event.html' class='btn btn-default'>Read More</a>";
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
		?>
								
			
		
			
			</section>
			<!-- END TEAM SECTION -->
<?php include 'footer.php';?>