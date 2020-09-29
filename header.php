    <!-- header -->
    <section id="header">
        <!-- <div class="container-fluid"> -->
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-nav">
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="./Assets/logo/logo syn cepat.png">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                            <!-- bisa pake ml-auto 
                            <div class="navbar-nav ml-auto"> 
                            -->
                            <div class="navbar-nav">
                                <a class="nav-link" href="?page=home">Beranda </a>
                                <a class="nav-link" href="?page=layanankami">Layanan Kami</a>
                                <a class="nav-link" href="?page=contactus">Contact Us</a>
                                <?php
                                if (!isset($_SESSION['IdUser'])) {
                                    echo '<a class="nav-link" href="?page=login">Login</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <!-- akhir header -->