<?php 
$koneksi = mysqli_connect("localhost", "root", "", "Apk_nazril");

if (mysqli_connect_errno()) {
	echo "koneksi gagal " . mysql_connect_error();
}
 ?>