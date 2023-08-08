<?php
    include "../koneksi.php";
    //save code
    if(isset($_POST['simpan'])){
        mysqli_query($con, "INSERT INTO tb_nilai VALUES('', '$_POST[nis]', '$_POST[nama]', '$_POST[jurusan]', '$_POST[kelas]',
                    '$_POST[pjok]', '$_POST[b_ingg]', '$_POST[ppkn]', '$_POST[b_sunda]', '$_POST[pai]', '$_POST[mtk]',
                    '$_POST[b_indo]', '$_POST[sbk]', '$_POST[total]', '$_POST[rerata]', '$_POST[predikat]', '$_POST[status]', '$_POST[tgl_penilaian]')");
        echo "<script>alert('Data Tersimpan')</script>";
        echo "<script>document.location.href = '?nilai-admin'</script>";
    }
    //delete code
    if(isset($_GET['hapus'])){
        mysqli_query($con, "DELETE FROM tb_nilai WHERE kd_nilai = '$_GET[id]'");
        echo "<script>alert('Data Terhapus')</script>";
        echo "<script>document.location.href = '?nilai-admin'</script>";
    }
?>
<form action="" method="POST"  enctype="multipart/form-data">
<div id="main" width="100%">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Input Data Nilai Siswa</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard-admin.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Proses</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="basicInput">NIS</label>
                            <input type="number" id="nis" name="nis" class="form-control" placeholder="Masukkan NIS" value="<?php echo @$_POST['nis']?>" onchange="submit()">
                            <?php
                                if(isset($_POST['nis'])){
                                    $n = mysqli_query($con, "SELECT a.nis, a.nama, b.jurusan, c.kelas FROM tb_siswa AS a JOIN tb_jurusan AS b ON a.kd_siswa = b.kd_jurusan 
                                                            JOIN tb_kelas AS c ON a.kd_siswa = c.kd_kelas WHERE nis = '$_POST[nis]'");
                                    $nis = mysqli_fetch_array($n);
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Nama</label>
                            <input type="text" name="nama" value="<?php echo @$nis['nama'] ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Jurusan</label>
                            <input type="text" name="jurusan" value="<?php echo @$nis['jurusan'] ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Kelas</label>
                            <input type="text" name="kelas" value="<?php echo @$nis['kelas'] ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <div class="card-title">Mapel Umum</div>
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Pendidikan Jasmani dan Rohani</label>
                            <input type="number" class="form-control" id="basicInput" name="pjok" value="<?php echo @$_POST['pjok']?>" required>
                            <label for="basicInput">Bahasa Inggris</label>
                            <input type="number" class="form-control" id="basicInput" name="b_ingg" value="<?php echo @$_POST['b_ingg']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Pendidikan Kewarganegaraan</label>
                            <input type="number" class="form-control" id="basicInput" name="ppkn" value="<?php echo @$_POST['ppkn']?>" required>
                            <label for="basicInput">Bahasa Sunda</label>
                            <input type="number" class="form-control" id="basicInput" name="b_sunda" value="<?php echo @$_POST['b_sunda']?>" required> 
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Pendidikan Agama Islam</label>
                            <input type="number" class="form-control" id="basicInput" name="pai" value="<?php echo @$_POST['pai']?>" required>
                            <label for="basicInput">Matematika</label>
                            <input type="number" class="form-control" id="basicInput" name="mtk" value="<?php echo @$_POST['mtk']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Bahasa Indonesia</label>
                            <input type="number" class="form-control" id="basicInput" name="b_indo" value="<?php echo @$_POST['b_indo']?>" required>
                            <label for="basicInput">Seni Budaya dan Kebudayaan</label>
                            <input type="number" class="form-control" id="basicInput" name="sbk" value="<?php echo @$_POST['sbk']?>" required>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <input type="submit" name="hitung" value="Hitung" class="btn btn-warning me-1 mb-1">
                            <?php
                                if(isset($_POST['hitung'])){
                                    $total = $_POST['pjok'] + $_POST['b_ingg'] + $_POST['ppkn'] + $_POST['b_sunda'] + $_POST['pai'] + $_POST['mtk'] + $_POST['b_indo'] + $_POST['sbk'];
                                    $rerata = $total / 8;
                                    if($rerata>=90){
                                        $predikat = "A";
                                    }elseif($rerata>=80){
                                        $predikat = "B";
                                    }elseif($rerata>=70){
                                        $predikat = "C";
                                    }else{
                                        $predikat = "D";
                                    }

                                    if($rerata>=75){
                                        $status = "Lulus";
                                    }else{
                                        $status = "Tidak Lulus";
                                    }
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Total Nilai</label>
                            <input type="number" class="form-control" id="basicInput" name="total" value="<?php echo @$total?>">
                            <label for="basicInput">Rata-rata</label>
                            <input type="number" class="form-control" id="basicInput" name="rerata" value="<?php echo @$rerata?>">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Predikat</label>
                            <input type="text" class="form-control" id="basicInput" name="predikat" value="<?php echo @$predikat?>">
                            <label for="basicInput">Keterangan</label>
                            <input type="text" class="form-control" id="basicInput" name="status" value="<?php echo @$status?>">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Tanggal Penilaian</label>
                            <input type="date" class="form-control" id="basicInput" name="tgl_penilaian" value="<?php echo @$tgl_penilaian?>">
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary me-1 mb-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Nilai Siswa</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Nilai Siswa
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>kelas</th>
                            <th>Total Nilai</th>
                            <th>Rata-rata</th>
                            <th>Predikat</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = mysqli_query($con, "SELECT * FROM tb_nilai ORDER BY nis ASC");
                            $no = 0;
                            while($data = mysqli_fetch_array($sql)){
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $data['nis']?></td>
                            <td><?php echo $data['nama']?></td>
                            <td><?php echo $data['jurusan']?></td>
                            <td><?php echo $data['kelas']?></td>
                            <td><?php echo $data['total']?></td>
                            <td><?php echo $data['rerata']?></td>
                            <td><?php echo $data['predikat']?></td>
                            <td><?php echo $data['status']?></td>                 
                            <td><a href="cetak-admin.php?cetak&id=<?php echo $data['kd_nilai']?>" class="btn btn-success">Cetak</a>
                                <a href="?nilai-admin&hapus&id=<?php echo $data['kd_nilai']?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>

    </section>
  
    <!-- Basic Tables end -->
</div>
        </div>
</form>