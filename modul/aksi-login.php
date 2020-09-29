<?php

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$query = mysqli_query($konek, $sql);
// $cekData   = mysqli_num_rows($query); //hasilnya kalo ada data berarti lebih dari 0
$dataUsers = mysqli_fetch_assoc($query); //mengambil data users berdasarkan email

// var_dump($cekData);
// die;

// if ($cekData > 0) {
if (!empty($email) or !empty($password)) {
    if ($dataUsers !== null) {
        if ($password == $dataUsers['password']) {
            if ($dataUsers['status'] == 'Aktif') {
                notif("Berhasil Login", "success");
                if ($_POST['rememberme'] == 'on') {
                    setcookie('login', $dataUsers['id_user'], time() + 120);
                }

                $_SESSION['IdUser']   = $dataUsers['id_user'];
                $_SESSION['Email']    = $dataUsers['email'];
                $_SESSION['Username'] = $dataUsers['username'];
                $_SESSION['Status']   = $dataUsers['status'];
                $_SESSION['Level']    = $dataUsers['level'];
                $_SESSION['LoginAt']  = $dataUsers['login_at'];

                header("Location: index.php");
            } else {
                notif("Akun tidak aktif. Silakan hubungi admin", "warning");
                header("Location: ?page=login");
            }
        } else {
            notif("Password tidak valid", "danger");
            header("Location: ?page=login");
        }
    } else {
        notif("Email tidak valid", "danger");
        header("Location: ?page=login");
    }
} else {
    notif("Email atau password harap diisi terlebih dahulu", "danger");
}


// echo $email, ' ', $password;

//mengecek perbandingan
// $cekemail = ($email == 'admin@gmail.com');
// $cekpassword = ($password == '123');
// $cekstatus = 'aktif';
// // var_dump($cek);
// if ($email !== 'admin@gmail.com' and $password !== '123') {
//     echo 'email dan password salah';
// } else if ($email !== 'admin@gmail.com') {
//     echo 'email salah';
// } else if ($password !== '123') {
//     echo 'password salah';
// } else if ($cekstatus !== 'aktif') {
//     echo 'status tidak aktif';
// } else {
//     echo 'Login berhasil';
// }
