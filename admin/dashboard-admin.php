<?php
    include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard -  Admin - Akademik</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="assets/vendors/jquery-datatables/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/all.min.css">>
    <style>
        table.dataTable td{
            padding: 15px 8px;
        }
        .fontawesome-icons .the-icon svg {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
        <a class="navbar-brand" href="dashboard-admin.php">
            <strong><span>Web</span> Akademik</strong>
        </a>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item active ">
                <a href="?content-admin" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Data Proses</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="?guru-admin">Data Guru</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="?jurusan-admin">Data Jurusan</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="?kelas-admin">Data Kelas</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="?mapel-admin">Data Mapel</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="?siswa-admin">Data Siswa</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="?nilai-admin">Data Nilai</a>
                    </li>
                </ul>
            </li>
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Cetak</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="?raport-admin">Raport</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="?sertifikat-admin">Sertifikat</a>
                    </li>
                </ul>
            </li>
            <li
                class="sidebar-item ">
                <a href="logout.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Logout</span>
                </a>
            </li>           
        </ul>
    </div> 
</div>
<?php
        if(isset($_GET['guru-admin'])){
            include "guru-admin.php";
        }elseif(isset($_GET['kelas-admin'])){
            include "kelas-admin.php";
        }elseif(isset($_GET['jurusan-admin'])){
            include "jurusan-admin.php";
        }elseif(isset($_GET['siswa-admin'])){
            include "siswa-admin.php";
        }elseif(isset($_GET['nilai-admin'])){
            include "nilai-admin.php";
        }elseif(isset($_GET['mapel-admin'])){
            include "mapel-admin.php";
        }elseif(isset($_GET['raport-admin'])){
            include "raport-admin.php";
        }elseif(isset($_GET['sertifikat-admin'])){
            include "sertifikat-admin.php";
        }else{
            include "content-admin.php";
        }
    ?>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>Copyright 2022 &copy; Azzam Rafi Zafran</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
<script src="assets/vendors/apexcharts/apexcharts.js"></script>
<script src="assets/js/pages/dashboard.js"></script>
<script src="assets/vendors/jquery/jquery.min.js"></script>
<script src="assets/vendors/jquery-datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js"></script>
<script src="assets/vendors/fontawesome/all.min.js"></script>
<script>
    // Jquery Datatable
    let jquery_datatable = $("#table1").DataTable()
</script>
    <script src="assets/js/mazer.js"></script>
</body>

</html>
