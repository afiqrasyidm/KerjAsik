	
<?php

		$nameErr = "";
		$passErr = "";
		$cek = "";
	
	
	
	if(isset($_POST['usernameBaru1'])){
		//echo "asdasdsad";
		$username = $_POST['usernameBaru1'];
		$password = $_POST['passwordBaru1'];
		$nama = $_POST['nama1'];
		$email = $_POST['emailBaru1'];


		$nomorHP = $_POST['nomorHP1'];

		
		$pekerjaan = $_POST['pekerjaan'];
		$instansi = $_POST['instansi'];
			$conn = connectDB();
		
		
		//sumber http://stackoverflow.com/questions/11873990/create-preg-match-for-password-validation-allowing
		
		//memasukkan data
		$sqlSudahAda= "SELECT * FROM Pekerja_Asik WHERE username='$username' ";
		$sql = "INSERT into Pekerja_Asik (fullname,no_hp,username, email, password ,pekerjaan, instansi ) values('$nama','$nomorHP','$username','$email','$password','$pekerjaan','$instansi')";
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
		
		<!--This is a comment. Comments are not displayed in the browser
		<h2>Insert Account</h2>
		
http://codepen.io/axpro/pen/eIkAm
		<form method="POST" action="login.php">
			username: <input type="text" name="usernameBaru"><br>
			password: <input type="password" name="passwordBaru"><br>
			email: <input type="text" name="emailBaru"><br>
			<input type="submit" value="submit">
			
		</form>
		-->

						<div class="box">
							<div class="content registerBox" style="display:none;">
								<div class="form">
									<form method="post"  action="" accept-charset="UTF-8">
															
									<input id="email" class="form-control" type="text" placeholder="Email" name="emailBaru1">
									<input id="fullname" class="form-control" type="text" placeholder="fullname" name="nama1">
									<input id="username" class="form-control" type="text" placeholder="Username" name="usernameBaru1">                               
									<input id="password" class="form-control" type="password" placeholder="Password" name="passwordBaru1">
									<input id="nomorHp" class="form-control" type="text" placeholder="NO HP" name="nomorHP1">
									
									<input class="form-control" type="text" placeholder="pekerjaan" name="pekerjaan">
									
									<input class="form-control" type="text" placeholder="instansi" name="instansi">
															   
															  

									 <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
																
															
									</form>
								</div>
							</div>
						</div>     
	