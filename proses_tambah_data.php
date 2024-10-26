<?php
include'koneksi.php';

$id_barang		= $_POST['id_barang'];
$gambar_barang 	= $_POST['gambar_barang'];
$nama_barang 	= $_POST['nama_barang'];
$fk_id_kategori = $_POST['fk_id_kategori'];
$harga_barang 	= $_POST['harga_barang'];
$jumlah_barang  = $_POST['jumlah_barang'];



$sql = "INSERT INTO daftar_barang (id_barang, gambar_barang, nama_barang, fk_id_kategori, harga_barang)
        VALUES ('$id_barang', '$gambar_barang', '$nama_barang', '$fk_id_kategori', '$harga_barang')";

$query = mysqli_query($koneksi, $sql);
if($query){
		header("Location:dashboard.php");
}else{
		echo"<script>alert('Maaf Data Tidak Tersimpan');window.location.assign('dashboard.php);</script>";
}
?>