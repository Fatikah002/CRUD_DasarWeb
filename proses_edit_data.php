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

        if (in_array($fileType, $allowedExtensions)) {
            if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
                $gambar_barang = $_FILES["myfile"]["name"];
            } else {
                echo "<script>alert('Gagal mengunggah file.');window.location.assign('dashboard.php');</script>";
                exit();
            }
        } else {
            echo "<script>alert('File tidak valid.');window.location.assign('dashboard.php');</script>";
            exit();
        }
    }

    if (empty($gambar_barang)) {
        $sql = "SELECT gambar_barang FROM daftar_barang WHERE id_barang = '$id_barang'";
        $result = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_assoc($result);
        $gambar_barang = $row['gambar_barang'];
    }

    $sql = "UPDATE daftar_barang SET 
                nama_barang='$nama_barang', 
                fk_id_kategori='$fk_id_kategori', 
                harga_barang='$harga_barang', 
                jumlah_barang='$jumlah_barang', 
                gambar_barang='$gambar_barang' 
            WHERE id_barang='$id_barang'";

    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Maaf, data tidak tersimpan');window.location.assign('dashboard.php');</script>";
    }
}
