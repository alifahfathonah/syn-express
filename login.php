<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

    <!-- header -->

    <!-- akhir header -->

    <section id="formyes">

        <center>
            <h1> <b>Login Your Account</b></h1>
        </center>
        <div class="row justify-content-center">
            <div class="col-lg-4 bg-yes text-center">
                <?php tampilNotif(); ?>
                <div class="halaman-ulasan-rating">
                    <form action="?page=aksi-login" method="POST">
                        <p>
                            <input class="form-control" name="email" type="text " placeholder="Email" required>
                        </p>
                        <p>
                            <div>
                                <input class="form-control" name="password" id="password" type="password" placeholder="Password" required>
                                <img src="./Assets/icon/password eye.png" height="20" width="auto" id="lihat" class="float-right" style="position:absolute; right:62px; top:110px" onclick="lihatPassword()"></img>
                            </div>
                        </p>
                        <p>
                            <input name="rememberme" id="rememberme" type="checkbox">
                            <label for="rememberme">Ingat Saya</label>
                        </p>
                        <button type="submit" name="login" class="btn btn-warning">Login</button><br><br>
                        <a href="">Lupa Kata Sandi?</a>&emsp;
                        <a href="?page=register" class="btn btn-outline-warning">Buat Akun</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->

</body>

</html>