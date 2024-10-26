<!DOCTYPE html>
<html>

<head>
    <title> Toko Palugada</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</head>

<body>

    <section id="login" class="pt-5 ">
        <div class="container mt-5 justify-content-center col-md-4  col-lg-3  justify-content-between card">
            <div class="mb-3 ">
                <form action="barang.php" method="post">
                    <h2 class="text-center">Form Login</h2>

                    <label for="username" class="form-label">Username: </label>
                    <input type="username" class="form-control" id="username">

                    <label for="password" class="form-label">Password: </label>
                    <input type="password" class="form-control" id="password"><br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </section>

</body>

</html>