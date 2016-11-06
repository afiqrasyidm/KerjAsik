<?php
include 'database.php';
session_start();

$id="";
$username = $_SESSION["userlogin"];
$conn = connectDB();
$sql = "SELECT id FROM Pencari_Pekerja_Asik WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row["id"];
$conn->close();

if(isset($_POST["deskripsi"])){
$deskripsi = $_POST["deskripsi"];
$judul = $_POST["judul"];
$buka = $_POST["buka"];
$tutup = $_POST["tutup"];
$jumlahPekerja = $_POST["jumlah_pekerja"];
$lokasi = $_POST["lokasi"];

//yang foto belum dimasukin

$conn = connectDB();
$sql="INSERT INTO Pekerjaan_Asik (id_pencari_pekerja_asik, deskripsi, tanggal_buka_daftar, tanggal_tutup_daftar, lokasi, jumlah_pekerja, judul  )
VALUES('$id', '$deskripsi', '$buka', '$tutup', '$lokasi', '$jumlahPekerja', '$judul')";

 $result = mysqli_query($conn, $sql);
 $conn->close();
header("Location:PekerjaanAsik.php");
}
/**if(isset($_POST['motivasi']))
{    
 $motivasi = $_POST['motivasi'];
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 $conn = connectDB();

 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO tbl_uploads_pencari_beasiswa(user_id,motivasi,file,type,size) VALUES('$user_id','$motivasi','$final_file','$file_type','$new_size')";
  $result = mysqli_query($conn, $sql);;
  */
  ?>