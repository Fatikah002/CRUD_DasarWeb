<?php
session_start();
include("koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from user WHERE username='$username' AND password='$password'";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    echo "Login gagal! <a href='login.php'><br> Silakan login kembali</a>";
}

$koneksi->close();
?>

