<?php
include "konesksi.php";

$username=$_POST["username"];
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$email=$_POST["email"];
$no_hp=$_POST["no_hp"];
$password=$_POST["password"];


  $sql="insert into anggota (username,nama,alamat,email,no_hp,password) values
		('$username','$nama','$alamat','$email','$no_hp','$password')";

  $hasil=mysqli_query($kon,$sql);

  if ($hasil) {
	echo "Berhasil simpan data ";
	exit;
  }
else {
	echo "Gagal simpan data ";
	exit;
}  

?>