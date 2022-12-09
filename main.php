<?php

if (empty($_SESSION['username_cloudvape'])) {
    header('location:login');
}

include "proses/connect.php";

$query = mysqli_query($con, "SELECT * FROM user WHERE username = '$_SESSION[username_cloudvape]'");
$hasil = mysqli_fetch_array($query);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CloudVape</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
    <!--header-->
    <?php include "header.php"; ?>
    <!--end header-->

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <?php include "sidebar.php"; ?>
            <!--endsidebar-->

            <!--content-->
            <?php
            include $page;
            ?>
            <!--end content-->
        </div>
    </div>
    <div class="fixed-bottom text-center bg-dark h-10"> <a class="link-warning" href="">copyright Haviedz Miftah</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>