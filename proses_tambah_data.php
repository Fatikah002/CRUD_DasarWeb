<?php
include 'koneksi.php';

if (isset($_POST["submit"])) {
    $targetdir = "img/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxSize = 5 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxSize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            $id_barang = $_POST['id_barang'];
            $gambar_barang = basename($_FILES["myfile"]["name"]);
            $nama_barang = $_POST['nama_barang'];
            $fk_id_kategori = $_POST['fk_id_kategori'];
            $harga_barang = $_POST['harga_barang'];
            $jumlah_barang = $_POST['jumlah_barang'];

            $sql = "INSERT INTO daftar_barang (id_barang, gambar_barang, nama_barang, fk_id_kategori, harga_barang, jumlah_barang) 
                    VALUES ('$id_barang', '$gambar_barang', '$nama_barang', '$fk_id_kategori', '$harga_barang', '$jumlah_barang')";
            $query = mysqli_query($koneksi, $sql);

            if($query){
                header("Location:dashboard.php");
                exit;
            } else {
                echo "<script>alert('Maaf Data Tidak Tersimpan');window.location.assign('dashboard.php');</script>";
            }
        } else {
            echo "<script>alert('Gagal mengunggah file.');window.location.assign('dashboard.php');</script>";
        }
    } else {
        echo "<script>alert('File tidak valid atau melebihi ukuran maksimum yang diizinkan.');window.location.assign('dashboard.php');</script>";
    }
}
?>
