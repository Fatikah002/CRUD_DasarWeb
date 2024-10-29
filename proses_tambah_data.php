<?php
include 'koneksi.php';

if (isset($_POST["submit"])) {
    $targetdir = "img/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] > 0) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            $gambar_barang = basename($_FILES["myfile"]["name"]);
            $nama_barang = $_POST['nama_barang'];
            $fk_id_kategori = $_POST['fk_id_kategori'];
            $harga_barang = $_POST['harga_barang'];
            $jumlah_barang = $_POST['jumlah_barang'];

            $sql = "INSERT INTO daftar_barang (gambar_barang, nama_barang, fk_id_kategori, harga_barang, jumlah_barang) 
                    VALUES (?, ?, ?, ?, ?)";
            $params = array($gambar_barang, $nama_barang, $fk_id_kategori, $harga_barang, $jumlah_barang);
            $query = sqlsrv_query($koneksi, $sql, $params);

            if($query){
                header("Location:dashboard.php");
                exit;
            } else {
                echo print_r(sqlsrv_errors(), true);
            }
        } else {
            echo "<script>alert('Gagal mengunggah file.');window.location.assign('dashboard.php');</script>";
        }
    } else {
        echo "<script>alert('File tidak valid yang diizinkan.');window.location.assign('dashboard.php');</script>";
    }
}
?>
