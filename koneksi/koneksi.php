<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_syn-express';

// $konek = mysqli_connect($server, $user, $pass, $db) or die(mysqli_errno($konek));
$konek = mysqli_connect($server, $user, $pass, $db) or die(mysqli_errno('terjadi kesalahan'));
