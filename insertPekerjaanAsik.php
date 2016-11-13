

<?php
session_start();
include 'database.php';

$conn = connectDB();
//dibikin satu aja karena login belum diimplementasikan
$sql = "SELECT id FROM Pencari_Pekerja_Asik WHERE id=1'";
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
move_uploaded_file($file_loc,$folder.$final_file);

$conn = connectDB();

$sql="INSERT INTO Pekerjaan_Asik (id_pencari_pekerja_asik, deskripsi, tanggal_buka_daftar, tanggal_tutup_daftar, lokasi, jumlah_pekerja, judul, foto_iklan )
VALUES('1', '$deskripsi', '$buka', '$tutup', '$lokasi', '$jumlahPekerja', '$judul','$final_file')";


 $result = mysqli_query($conn, $sql);
 $conn->close();
header("Location:kumpulanlowongan.php");
}

  ?>