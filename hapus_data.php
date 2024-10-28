<?php 

$id_barang = $_GET ['id_barang'];

include'koneksi.php';
$sql = "DELETE FROM daftar_barang WHERE id_barang = ?";
$params = array( $id_barang);
$query = sqlsrv_query($koneksi, $sql, $params);
if($query){
    header("Location:dashboard.php");
}else{
    echo"<script>alert('Maaf Data Tidak Terhapus');window.location.assign('dashboard.php);</script>";
}
?>