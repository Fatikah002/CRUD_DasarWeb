<!DOCTYPE html>
<html>

<head>
    <title>Toko Palugada</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</head>

<body style="overflow: hidden; background-color:#FFF0F5;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', 'Arial', 'sans-serif'; ">

    <section id="tambah_data" class="py-5 " style="height: 100vh; display: flex; align-items: center; ">
        <div class="container d-flex justify-content-center">
            <div class="col-md-6 col-lg-5 card p-4">
                <form action="proses_tambah_data.php" method="post" enctype="multipart/form-data" >
                    <h2 class="text-center" style="font-weight:bold;">Form Tambah Data</h2>

                    <div class="mb-3">
                        <label for="gambar_barang" class="form-label">Gambar Barang</label>
                        <input type="file" class="form-control" name="myfile" id="gambar_barang" accept=".jpg, .jpeg, .png, .gif">
                    </div>

                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                    </div>

                    <div class="mb-3">
                        <label for="kategori_barang" class="form-label">Kategori Barang</label>
                        <select name="fk_id_kategori" id="kategori_barang" class="form-select" required>
                            <option value="1">Pakaian Atas</option>
                            <option value="2">Pakaian Bawah</option>
                            <option value="3">Sepatu</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="harga_barang" class="form-label">Harga Barang</label>
                        <input type="text" class="form-control" id="harga_barang" name="harga_barang" required>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" min="0" required>
                    </div>

                    <div class="d-flex justify-content-between" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', 'Arial', 'sans-serif';" >
                        <a href="dashboard.php" class="btn btn-dark">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>

</html>
