<html>
<head>
    <title>Membuat Form Login</title>
</head>
<body>
    <form action="">
        <form>
            <div>
                <label>Username</label> <br>
                <input name="nama" type="text">
            </div>
            <div>
                <label>password</label> <br>
                <input name="password" type="password">
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
        </form>
    </form>
    <!-- script ini dibuat untuk menampilkan input form ketika di submit -->
    <!-- Start menampilka input -->
    <?php
    if (isset($_GET['nama']) | isset($_GET['password'])) {
        echo "Nama : " . $_GET['nama'] . "<br> ";
        echo "Password : " . $_GET['password'];
    }
    ?>
    <!-- End menampilkan Input -->
</body>
</html>
