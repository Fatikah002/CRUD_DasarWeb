<?php 

$id_barang = $_GET['id_barang'];

include 'koneksi.php';
$sql = "SELECT * FROM daftar_barang WHERE id_barang = '$id_barang'";
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

<body style=" background-color:#FFF0F5; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', 'Arial', 'sans-serif';">
    <section id="edit_data">
        <div class="container mt-5 justify-content-center col-md-3 col-lg-5">
            <div class="card mb-5 p-4"> 
                <form action="proses_edit_data.php" method="post" enctype="multipart/form-data">
                    <h2 class="text-center" style="font-weight: bold;">Form Edit Data</h2>

                    <label for="id_barang" class="form-label">ID Barang</label>
                    <input value="<?= htmlspecialchars($data['id_barang']) ?>" readonly type="text" name="id_barang" class="form-control" required><br>

                    <label for="gambar_barang" class="form-label">Gambar Barang</label><br>
                    <?php if (!empty($data['gambar_barang'])): ?>
                        <img src="img/<?= htmlspecialchars($data['gambar_barang']) ?>" alt="Gambar Barang" class="img-thumbnail mb-2" style="max-width: 30%;">
                    <?php endif; ?>
                    <input type="file" name="myfile" class="form-control" accept=".jpg, .jpeg, .png, .gif"><br>

                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input value="<?= htmlspecialchars($data['nama_barang']) ?>" type="text" class="form-control" name="nama_barang" required><br>

                    <label for="kategori_barang" class="form-label">Kategori Barang</label>
                    <select name="fk_id_kategori" class="form-control" required>
                        <option value="1" <?= $data['fk_id_kategori'] == 1 ? 'selected' : '' ?>>Pakaian Atas</option>
                        <option value="2" <?= $data['fk_id_kategori'] == 2 ? 'selected' : '' ?>>Pakaian Bawah</option>
                        <option value="3" <?= $data['fk_id_kategori'] == 3 ? 'selected' : '' ?>>Sepatu</option>
                    </select><br>

                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input value="<?= htmlspecialchars($data['harga_barang']) ?>" type="text" class="form-control" name="harga_barang" required><br>

                    <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                    <input value="<?= htmlspecialchars($data['jumlah_barang']) ?>" type="number" class="form-control" name="jumlah_barang" min="0"><br>
                    
                    <a href="dashboard.php" class="btn btn-dark me-auto">Kembali</a>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    
                </form>
            </div>
        </div>
    </section>
</body>

</html>
