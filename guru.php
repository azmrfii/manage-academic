<?php
    include "koneksi.php";
?>
<header class="site-header section-padding-img site-header-image">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 header-info">
                <h1>
                    <span class="d-block text-primary">Company</span>
                    <span class="d-block text-dark">Fashion</span>
                </h1>
            </div>
        </div>
    </div>
    <img src="images/header/businesspeople-meeting-office-working.jpg" class="header-image img-fluid" alt="">
</header>
            <section class="testimonial section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 mx-auto col-11">
                            <h2 class="text-center">Data Pengajar, <br> <span>Web</span> Akademik</h2>
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tgl Lahir</th>
                                <th>Alamat</th>
                                <th>No Handphone</th>
                                <th>Kode Mapel</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql = mysqli_query($con, "SELECT * FROM tb_guru ORDER BY nama ASC");
                            $no = 0;
                            while($data = mysqli_fetch_array($sql)){
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $data['nama']?></td>
                                <td><?php echo $data['jk']?></td>
                                <td><?php echo $data['tgl_lahir']?></td>
                                <td><?php echo $data['alamat']?></td>
                                <td><?php echo $data['no_hp']?></td>
                                <td><?php echo $data['kd_mapel']?></td>
                                <td><?php echo $data['jabatan']?></td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody> 
                            </table>
                        </div>             
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
