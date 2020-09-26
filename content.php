<?php
// method get
$halaman = isset($_GET['page']) ? $_GET['page'] : '';

switch ($halaman) {
    case '':
        include 'view/home.php';
        break;
    case 'home':
        include 'view/home.php';
        break;
    case 'contactus':
        include 'view/contactus.php';
        break;
    case 'informasi':
        include 'view/informasi.php';
        break;
    case 'layanankami':
        include 'view/layanankami.php';
        break;
    case 'rating':
        include 'view/rating.php';
        break;
    case 'reg':
        include 'view/reg.php';
        break;
    case 'yes':
        include 'view/yes.php';
        break;
    case 'login':
        include 'login.php';
        break;
    case 'aksi-login':
        include 'modul/aksi-login.php';
        break;
    case 'register':
        include 'register.php';
        break;

    default:
        echo "halaman tidak ditemukan";
        break;
}
