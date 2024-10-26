<?php

$koneksi =  mysqli_connect('localhost','root','','crud_toko');

if (!$koneksi) {
	echo "Koneksi anda gagal";
} else {
	 echo "Database terkoneksi";
}

?>