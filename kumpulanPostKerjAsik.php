<?php include 'headerSelainIndex.php';?>
	

	<div class="container">
		<h2> Lowongan KerjAsik</h2>
	<?php
	
	
					$conn = connectDB();
				
					$sql = "SELECT * FROM Pekerjaan_Asik ";
					
					$result = $conn->query($sql);
					
						if ( mysqli_num_rows($result) > 0) {
							// output data of each row
							
							while($row = mysqli_fetch_assoc($result)) {
								//echo "id: " . $row["comment_id"]. " - Name: " . $row["name"]. " " . $row["email"];
								//echo $row["content"]. "<br>";
										
										echo "<div class= 'container  pencariBeasiswa'>";
										echo "<h3>".$row["judul"]."</h3>";
									
										echo "<div class= 'FotoPekerjaan'>";
										echo "<img  class='images' src='images/1.png' alt='gambar' style='width:80px;height:70px;'>";
										echo "</div>";
									
										echo "<div class= 'deskripsi'>";
										echo "<p> Lokasi Pekerjaan Asik :".$row["lokasi"]."</p>";
										echo "<p> Pekerja yang dibutuhkan sebanyak ".$row["jumlah_pekerja"]."</p>";
										echo "<p>Tanggal Buka Pendaftaran:".$row["tanggal_buka_daftar"]."</p>";
										echo "<p> Tanggal Tutup Pendaftaran :".$row["tanggal_tutup_daftar"]."</p>";
										
										
										echo "<h3> Deskripsi </h3>";
										
										
										echo "<p>".$row["deskripsi"]."</p>";
										
										
										echo "</div>";
										
										echo "</div>";

							}
					
						} else {
						//	echo "0 results";
						}
						mysqli_close($conn);
						
	
	?>
	</div>


<?php include 'footer.php';?>