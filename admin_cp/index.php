<?php
session_start();
require '../koneksi/koneksi.php';
require '../koneksi/function.php';
require 'model/m_users.php';
require 'model/m_layanan.php';
ob_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include 'kepala.php';
    ?>

</head>

<body>
    <?php include 'header.php'; ?>
    <div class="row container-fluid">
        <div class="col-md-3">
            <?php include 'menu.php'; ?>
        </div>
        <div class="col-md-9">
            <?php include 'content.php'; ?>

        </div>
    </div>

    <?php include 'kaki.php';
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>

</html>