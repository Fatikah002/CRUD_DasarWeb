<?php
include 'koneksi.php';

if (isset($_POST["submit"])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $fk_id_kategori = $_POST['fk_id_kategori'];
    $harga_barang = $_POST['harga_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];

    $targetdir = "img/";

    $gambar_barang = "";
    if (!empty($_FILES["myfile"]["name"])) {
        $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
        $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] > 0)  {
            if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
                $gambar_barang = $_FILES["myfile"]["name"];
            } else {
                echo print_r(sqlsrv_errors(), true);
                exit();
            }
        } else {
            echo "<script>alert('File tidak valid atau melebihi ukuran maksimum yang diizinkan.');window.location.assign('dashboard.php');</script>";
            exit();
        }
    }

    if (empty($gambar_barang)) {
        $sql = "SELECT gambar_barang FROM daftar_barang WHERE id_barang = ?";
        $params = array($id_barang);
        $result = sqlsrv_query($koneksi, $sql, $params);
        $row = sqlsrv_fetch_array($result);
        $gambar_barang = $row['gambar_barang'];
    }

    $sql = "UPDATE daftar_barang SET 
                gambar_barang=?,
                nama_barang=?, 
                fk_id_kategori=?, 
                harga_barang=?, 
                jumlah_barang=? 
                 
            WHERE id_barang=?";

    $params = array($gambar_barang, $nama_barang, $fk_id_kategori, $harga_barang, $jumlah_barang, $id_barang);

    $query = sqlsrv_query($koneksi, $sql, $params);
    if ($query) {
        header("Location: dashboard.php");
    } else {
        echo print_r(sqlsrv_errors(), true);
    }
}
