<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>CRUD INVENTORI TOKO</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #FFF0F5; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', 'Arial', 'sans-serif';">
    <nav class="navbar navbar-expand-lg navbar-primary fixed-top "
        style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; background-color: #d03d74;">
        <div class="container">
            <a class="navbar-brand text-white" style="font-size:x-large; font-weight:bold;" href="#">TOKO PALUGADA</a>
        </div>
    </nav>

    <div class="container card mt-5 pt-4" style="background-color:#f8f7f3;">
        <h2>Daftar Barang</h2>

        <hr>
        <table class="table table-sm table-bordered">
            <thead class="thead table-danger">
                <a href="tambah_data.php" class="btn btn-dark me-auto ">Tambah Data</a><br>
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
                $sql = "SELECT daftar_barang.id_barang, 
                            daftar_barang.gambar_barang, 
                            daftar_barang.nama_barang, 
                            daftar_barang.fk_id_kategori, 
                            daftar_barang.harga_barang, 
                            daftar_barang.jumlah_barang, 
                            kategori_barang.jenis_kategori 
                        FROM daftar_barang 
                        JOIN kategori_barang ON daftar_barang.fk_id_kategori = kategori_barang.id_kategori";

                $data = array();
                $query = sqlsrv_query($koneksi, $sql);
                if(!empty($query)) {
                    while ($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                        $data[] = $row;
                    }
                }
                foreach ($data as $query) { ?>
                    <tr>
                        <td><?= $query['id_barang'] ?></td>
                        <td><img src="img/<?= $query['gambar_barang'] ?>" width="70" height="90" alt="Gambar Produk"></td>
                        <td><?= $query['nama_barang'] ?></td>
                        <td><?= $query['jenis_kategori'] ?></td>
                        <td><?= $query['harga_barang'] ?></td>
                        <td><?= $query['jumlah_barang'] ?></td>
                        <td>
                            <a href="edit_data.php?id_barang=<?= $query['id_barang'] ?>" class="btn btn-warning">EDIT</a>
                            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus query?')" href="hapus_data.php?id_barang=<?= $query['id_barang'] ?>" class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>