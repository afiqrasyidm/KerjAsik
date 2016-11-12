	<?php include 'database.php';?>
		

<?php

		$nameErr = "";
		$passErr = "";
		$cek = "";
	
	
	
	if(isset($_POST['usernameBaru2'])){
		//echo "asdasdsad";
		$username = $_POST['usernameBaru2'];
		$password = $_POST['passwordBaru2'];
		$nama = $_POST['nama2'];
		$email = $_POST['emailBaru2'];


		$nomorHP = $_POST['nomorHP2'];

		
		$instansi = $_POST['instansi2'];
			$conn = connectDB();
		
		
		//sumber http://stackoverflow.com/questions/22873990/create-preg-match-for-password-validation-allowing
		
		//memasukkan data
		$sqlSudahAda= "SELECT * FROM Pencari_Pekerja_Asik WHERE username='$username' ";
		$sql = "INSERT into Pencari_Pekerja_Asik (fullname,no_hp,username, email, password , instansi ) values('$nama','$nomorHP','$username','$email','$password','$instansi')";
			$resultSudahAda = $conn->query($sqlSudahAda);
	
		$cek=true;
		if($resultSudahAda->num_rows > 0){
			$cek=false;
		
		
		}
		if($cek){
	
			$result = $conn->query($sql);
		
		}
		$conn->close();
	}
	
	
	

	
?>
<!DOCTYPE html>

<html>
<head>
  <link rel="stylesheet" href="styles.css">
</head>
   <body>
   
									<form method="post"  action="" accept-charset="UTF-8">
															
										<input id="email" class="form-control" type="text" placeholder="Email" name="emailBaru2">
										<input id="fullname" class="form-control" type="text" placeholder="fullname" name="nama2">
										<input id="username" class="form-control" type="text" placeholder="Username" name="usernameBaru2">                               
										<input id="password" class="form-control" type="password" placeholder="Password" name="passwordBaru2">
										<input id="nomorHp" class="form-control" type="text" placeholder="NO HP" name="nomorHP2">
										
										<input class="form-control" type="text" placeholder="pekerjaan" name="pekerjaan">
										
										<input class="form-control" type="text" placeholder="instansi" name="instansi">
																   
																  

										 <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
																	
																
									</form>
							    
	</body>
</html>