<!DOCTYPE html>
<html>

<head>
    <title> Toko Palugada</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</head>

<body style="background: linear-gradient(#d03d74, #f8f7f3);">
    <section id="login" class="pt-5" style="min-height: 100vh;">
        <div class="container mt-5 justify-content-center col-md-4 col-lg-3 card p-4" style="background-color: #FFF0F5;">
            <div class="mb-3">
                <form action="proses_login.php" method="post">
                    <h2 class="text-center" 
                    style="font-weight:bold;">Form Login</h2>

                    <label for="username" class="form-label" 
                    style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required><br>

                    <label for="password" class="form-label" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" >Password:</label>
                    <input type="password" class="form-control " id="password" name="password" required><br>

                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>