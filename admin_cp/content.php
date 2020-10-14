<?php
// METHOD GET
$halaman = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

switch ($halaman) {
    case 'dashboard':
        include 'view/dashboard.php';
        break;

        // user
    case 'users':
        include 'view/users.php';
        break;
    case 'add-users':
        include 'view/add-form/add-users.php';
        break;
    case 'upd-users':
        include 'view/upd-form/upd-users.php';
        break;

        // user-2
    case 'users-2':
        include 'view/users-2.php';
        break;
    case 'add-users-2':
        include 'view/add-form/add-users-2.php';
        break;
    case 'upd-users-2':
        include 'view/upd-form/upd-users-2.php';
        break;

        // datalayanan
    case 'datalayanan':
        include 'view/datalayanan.php';
        break;
    case 'add-layanan':
        include 'view/add-form/add-layanan.php';
        break;
    case 'upd-layanan':
        include 'view/upd-form/upd-layanan.php';
        break;



        //AKSI FORM
    case 'act-users':
        include 'modul/act-users.php';
        break;

    case 'act-users-2':
        include 'modul/act-users-2.php';
        break;

    case 'act-layanan':
        include 'modul/act-layanan.php';
        break;

    default:
        echo "HALAMAN TIDAK DITEMUKAN";
        break;
}
