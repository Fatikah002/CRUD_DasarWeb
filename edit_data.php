<?php 

$id_barang = $_GET ['id_barang'];

include'koneksi.php';

$sql = "SELECT * FROM barang WHERE id_barang = $id_barang";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Toko Palugada</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</head>

<body>

    <section id="edit_data" class="pt-5 ">
        <div class="container mt-5 justify-content-center col-md-4  col-lg-3  justify-content-between card">
            <div class="mb-3 ">
                <form action="proses_edit_data.php" method="post">
                    <h2 class="text-center">Form Edit Data </h2>

                    <label for="id_barang" class="form-label">ID Barang</label>
                    <input value="<?= $data['id_barang'] ?> " readonly type="text"  name="id_barang" class="form-control" required><br>

                    <label for="gambar_barang" class="form-label">Gambar Barang</label>
                    <input value="<?= $data['gambar_barang'] ?>" type="file" name="myfile" calss="form-control" required><br>

                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input value="<?= $data['nama_barang'] ?>" type="text" class="form-control" name="nama_barang" required><br>

                    <label for="kategori_barang" class="form-label">Kategori Barang</label>
                    <select  value="<?= $data['kategori_barang'] ?>" name="fk_id_kategori" size="1">
                        <option value="1">Pakaian Atas</option>
                        <option value="2">Pakaian Bawah</option>
                        <option value="3">Sepatu</option>
                    </select><br>

                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input value="<?= $data['harga_barang'] ?>" type="text" class="form-control" name="harga_barang" required><br>

                    <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                    <input value="<?= $data['jumlah_barang'] ?>" type="number" class="form-control" name="jumlah_barang" min="0"><br>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a href="dashboard.php" class="btn btn-primary me-auto">Kembali</a>
                </form>

            </div>
        </div>

    </section>
</body>


</html>