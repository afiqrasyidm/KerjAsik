<?php include 'headerSelainIndex.php';?>
	<div id="createPost">

		<button  id="submitButtonPencariBeasiswa" type="button" class="btn btn-success">Buat Pekerjaan Asik</button>  

	<script>
			var counter= true;
			
			$("#submitButtonPencariBeasiswa").click(function(){
				
				
				if(counter){
					<?php
		
					$boolean="true";
					if(!isset($_SESSION["userlogin"]) or $_SESSION["user_id"] == "0"){
							
								$boolean="false";
							
								echo "var node = document.createElement('P');";
								echo "var textnode = document.createTextNode('Anda harus login sebagai pencariPekerjaAsik');";
								echo "node.appendChild(textnode);";
								echo "document.getElementById('createPostPeringatan').appendChild(node);";
							
					}
					
					?>
					var boolean = "<?php echo $boolean; ?>";
					
					if(boolean === "true"){
							
							window.location.href='addPekerjaanAsik.php';
						
					}
					else{
						
						 counter =false ;
						
					}
				}
				
			});
	</script>

	</div>
			<div id ="createPostPeringatan">		
			</div>
	<div id ="pembatas">
	</div>
	<div class="container">
			
	<?php
	
	
					
					
					//disamain sama kerja asik
					$conn = connectDB();
		
					$sql = "SELECT * FROM pekerjaan_Asik order by id desc";
					$result = $conn->query($sql);
						if ( mysqli_num_rows($result) > 0) {
							// output data of each row
							
							while($row = mysqli_fetch_assoc($result)) {
								//echo "id: " . $row["comment_id"]. " - Name: " . $row["name"]. " " . $row["email"];
								//echo $row["content"]. "<br>";
										echo "<div class= 'container pekerjaanAsik'>";
										echo "<h3 class='judul'>".$row["judul"]."</h3>";
										echo "<div class= 'photoProfil'>";
										echo "<img  class='images' src='./uploads/".$row["foto_iklan"]."' alt='gambar' style='width:180px;height:150px;'>";
										echo "</div>";
										echo "<div class= 'deskripsi'>";
										echo "<p>".$row["deskripsi"]."</p>";
										echo "</div>";
										
										echo "</div>";
										//echo "</div>";
							}
					
						} else {
						//	echo "0 results";
						}
						mysqli_close($conn);
						
	
	?>
	</div>


<?php include 'footer.php';?>