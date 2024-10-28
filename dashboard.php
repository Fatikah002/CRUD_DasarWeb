<?php
require('koneksi.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>CRUD INVENTORI TOKO</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-primary bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" style="font-size:x-large" href="#">TOKO PALUGADA</a>
        </div>
    </nav>

    <div class="container card mt-5 pt-4">
        <h2>Daftar Barang</h2>

        <hr>
        <table class="table table-sm table-bordered">
            <thead class="thead table-danger">
                <a href="tambah_data.php" class="btn btn-primary me-auto ">Tambah Data</a><br>
                <tr>
                    <th>ID BARANG</th>
                    <th>GAMBAR BARANG</th>
                    <th>NAMA BARANG</th>
                    <th>KATEGORI BARANG</th>
                    <th>HARGA BARANG</th>
                    <th>JUMLAH BARANG</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody class="tbody table-info">
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM daftar_barang";
                $query = mysqli_query($koneksi, $sql);
                foreach ($query as $data) { ?>
                    <tr>
                        
                        <td><?= $data['id_barang'] ?></td>
                        <td><img src="img/<?= $data['gambar_barang'] ?>" width="70" height="90" alt="Gambar Produk"></td> 
                        <td><?= $data['nama_barang'] ?></td>
                        <td><?= $data['fk_id_kategori'] ?></td>
                        <td><?= $data['harga_barang'] ?></td>
                        <td><?= $data['jumlah_barang'] ?></td>
                        <td>
                        <a href="edit_data.php?id_barang=<?= $data['id_barang'] ?>" class="btn btn-warning">EDIT</a>
                        <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" href="hapus_data.php?id_barang=<?= $data['id_barang'] ?>" class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>