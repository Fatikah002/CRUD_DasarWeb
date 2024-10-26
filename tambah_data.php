<!DOCTYPE html>
<html>

<head>
    <title>Toko Palugada</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</head>

<body>

    <section id="tambah_data" class="pt-5 ">
        <div class="container mt-5 justify-content-center col-md-4  col-lg-3  justify-content-between card">
            <div class="mb-3 ">
                <form action="proses_tambah_data.php" method="post" enctype="multipart/form-data">
                    <h2 class="text-center">Form Tambah Data </h2>

                    <label for="id_barang" class="form-label">ID Barang</label>
                    <input type="text" class="form-control" id="id_barang" name="id_barang" required><br>

                    <label for="gambar_barang" class="form-label">Gambar Barang</label>
                    <input type="file" name="myfile" id="gambar_barang"><br>

                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" required><br>

                    <label for="kategori_barang" class="form-label">Kategori Barang</label>
                    <select name="fk_id_kategori" id="kategori_barang" size="1">
                        <option value="1">Pakaian Atas</option>
                        <option value="2">Pakaian Bawah</option>
                        <option value="3">Sepatu</option>
                    </select><br>

                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input type="text" class="form-control" id="harga_barang" name="harga_barang" required><br>

                    <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                    <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" min="0"><br>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a href="dashboard.php" class="btn btn-primary me-auto">Kembali</a>
                </form>

            </div>
        </div>

    </section>
</body>


</html>