
		
<?php

	$valid="";
	$user_id="";
	$id="";
	//$bol=false;
	if(isset($_POST['username'])){
			
	
		if(login($_POST['username'], $_POST['password'])){
			//tambahkan session, kemudian redirect
			
			
				$_SESSION["userlogin"] = $_POST["username"];
		?>
				 <script> location.replace("index.php"); </script>
		<?php
		}
		
	}
	else{
			
		
		
	}
	
	
	
	function login($username, $password){

		
		$conn = connectDB();
		
		$sql = "SELECT username, password FROM Pencari_Pekerja_Asik WHERE username='$username' AND password='$password'";
		$sqlPekerjaAsik = "SELECT username, password FROM Pekerja_Asik WHERE username='$username' AND password='$password'";
	
	
	
		$result = $conn->query($sql);
		$resultPekerjaAsik = $conn->query($sqlPekerjaAsik);
	
				
		//kalau 0 dia itu pekerja asik kalau 1 pencari pekerjaan asik		
		if($result->num_rows > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION["user_id"] = "1";
			$conn->close();
			return true;
		
		}
		if($resultPekerjaAsik->num_rows > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION["user_id"] = "0";
			$conn->close();
			return true;
		}
		
	
		
		$conn->close();
		//$valid= "password tidak valid";
		//echo $valid;
		//$bol=true;
		return false;
	}
	
	
?>

		<div class="form loginBox">
                <form method="POST" action="">
                
						<input id="username" class="form-control" type="text" placeholder="Username" name="username">
                        <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                         <input class="btn btn-default btn-login" type="submit" value="submit" onclick="loginAjax()">
                                
								
								
				</form>
          </div>
