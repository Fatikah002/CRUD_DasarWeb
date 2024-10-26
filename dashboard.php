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

        <div class="container card mt-5">
            <h2>Daftar Barang</h2>

            <hr>
            <table class="table table-sm table-bordered">
                <thead class="thead table-danger">
                    <tr>
                        <th>ID PRODUK</th>
                        <th>GAMBAR PRODUK</th>
                        <th>NAMA PRODUK</th>
                        <th>KATEGORI PRODUK</th>
                        <th>HARGA PRODUK</th>
                    </tr>
                </thead>
                <tbody class="tbody table-info">
                    <?php 
                    
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>