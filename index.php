<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Web - Akademik</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
        <!-- link href -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/slick.css"/>
        <link href="assets/css/tooplate-little-fashion.css" rel="stylesheet">
    </head>
    <body>
        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
        <main>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="dashboard.php">
                        <strong><span>Web</span> Akademik</strong>
                    </a>
                    <div class="d-lg-none">
                        <a href="sign-in.html" class="bi-person custom-icon me-3"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="?content">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="?profile">Profile Guru</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Peringkat Nilai</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="login.php" class="bi-person custom-icon me-3"></a>
                        </div>
                    </div>
                </div>
            </nav>

            <?php
                if(isset($_GET['guru'])){
                    include "guru.php";
                }elseif(isset($_GET['user'])){
                    include "user.php";
                }elseif(isset($_GET['jurusan'])){
                    include "jurusan.php";
                }elseif(isset($_GET['siswa'])){
                    include "siswa.php";
                }elseif(isset($_GET['nilai'])){
                    include "nilai.php";
                }elseif(isset($_GET['profile'])){
                    include "profile.php";
                }else{
                    include "content.php";
                }
            ?>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-10 me-auto mb-4">
                        <h4 class="text-white mb-3"><a href="dashboard.php">Web</a> Akademik</h4>
                        <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022 <strong>Azzam Rafi Zafran</strong></p>
                        <br>
                        <p class="copyright-text">Designed by <a href="https://www.tooplate.com/" target="_blank">Tooplate</a></p>
                    </div>

                    <div class="col-lg-5 col-8">
                        <h5 class="text-white mb-3">Sitemap</h5>

                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="about.html" class="footer-menu-link">Story</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Products</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy policy</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">FAQs</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-4">
                        <h5 class="text-white mb-3">Social</h5>

                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                            <li><a href="https://istagram.com/azmrfii/" class="social-icon-link bi-instagram"></a></li>
                            <li><a href="#" class="social-icon-link bi-skype"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/Headroom.js"></script>
        <script src="assets/js/jQuery.headroom.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <!-- datatables -->
        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/dataTables.bootstrap4.min.js"></script>
        <script src="assets/js/dataTables.buttons.min.js"></script>
        <script src="assets/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/js/jszip.min.js"></script>
        <script src="assets/js/pdfmake.min.js"></script>
        <script src="assets/js/vfs_fonts.js"></script>
        <script src="assets/js/buttons.html5.min.js"></script>
        <script src="assets/js/buttons.print.min.js"></script>
        <script src="assets/js/buttons.colVis.min.js"></script>
        <script src="assets/js/datatables-init.js"></script>

    </body>
</html>
