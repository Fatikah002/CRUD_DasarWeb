<?php 

$id_barang = $_GET ['id_barang'];

include'koneksi.php';
$sql = "DELETE FROM daftar_barang WHERE id_barang = $id_barang";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:dashboard.php");
}else{
    echo"<script>alert('Maaf Data Tidak Terhapus');window.location.assign('dashboard.php);</script>";
}
?>