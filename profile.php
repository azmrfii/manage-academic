<?php
    include "koneksi.php";
?>
        <main>
            <header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-primary">Profile Pengajar</span>
                                <span class="d-block text-dark">Web Akademik</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <section class="products section-padding">
                <div class="container">
                    <div class="row">
                        <?php
                            $sql = mysqli_query($con, "SELECT * FROM tb_guru ORDER BY kd_guru ASC");
                            while($data=mysqli_fetch_array($sql)){
                        ?>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.html">
                                    <img src="admin/<?php echo $data['gambar']?>" class="img-fluid product-image" alt="image" height="640px" width="640px">
                                </a>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link"><?php echo $data['nama'] ?></a>
                                        </h5>

                                        <p class="product-p"><?php echo $data['jabatan'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </main>