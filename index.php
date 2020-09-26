<?php
require 'koneksi/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- untuk mengambil file yang lain -->
    <?php include 'kepala.php'; ?>
</head>

<body>
    <!-- header -->
    <?php
    $p = isset($_GET['page']) ? $_GET['page'] : '';
    if ($p == 'layanankami') {
        include 'headerlayanankami.php';
    } else {
        include 'header.php';
    }
    ?>
    <!-- home -->
    <?php include 'content.php'; ?>
    <!-- footer -->
    <?php
    if (
        $p == 'layanankami' or $p == 'yes' or $p == 'reg' or $p == 'rating'
        or $p == 'informasi'
    ) {
        include 'footerlayanankami.php';
    } else {
        include 'footer.php';
    }
    ?>
    <!-- kaki -->
    <?php include 'kaki.php'; ?>
</body>


</html>