<?php 
$koneksi = mysqli_connect("localhost","login","123","weblogin");
 
// Check connections
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
