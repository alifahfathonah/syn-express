<?php

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$query = mysqli_query($konek, $sql);
// $cekData   = mysqli_num_rows($query); //hasilnya kalo ada data berarti lebih dari 0
$dataUsers = mysqli_fetch_assoc($query); //mengambil data users berdasarkan ema

// var_dump($cekData);
// die;

// if ($cekData > 0) {
if (!empty($email) or !empty($password)) {
    if ($dataUsers !== null) {
        if ($password == $dataUsers['password']) {
            if ($dataUsers['status'] == 'Aktif') {
                echo "<script>alert('Berhasil Login')</script>";
            } else {
                echo "<script>alert('Akun tidak aktif. Silakan hubungi admin')</script>";
            }
        } else {
            echo "<script>alert('Password tidak valid')</script>";
        }
    } else {
        echo "<script>alert('Email tidak valid')</script>";
    }
} else {
    echo "<script>alert('Email atau password harap diisi terlebih dahulu')</script>";
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
