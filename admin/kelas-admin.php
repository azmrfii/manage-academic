<?php
    include "../koneksi.php";
   //save code
   if(isset($_POST['simpan'])){
    mysqli_query($con, "INSERT INTO tb_kelas VALUES('', '$_POST[kelas]', '$_POST[kd_guru]')");
    echo "<script>alert('Data Tersimpan')</script>";
    echo "<script>document.location.href = '?kelas-admin'</script>";
}
//delete code
if(isset($_GET['hapus'])){
    mysqli_query($con, "DELETE FROM tb_kelas WHERE kd_kelas = '$_GET[id]'");
    echo "<script>alert('Data Terhapus')</script>";
    echo "<script>document.location.href = '?kelas-admin'</script>";
}
//edit code
if(isset($_GET['edit'])){
    $ed = mysqli_query($con, "SELECT * FROM tb_kelas WHERE kd_kelas = '$_GET[id]'");
    $edit = mysqli_fetch_array($ed);
}
//update code
if(isset($_POST['update'])){
    mysqli_query($con, "UPDATE tb_kelas SET kelas = '$_POST[kelas]', kd_guru = '$_POST[kd_guru]' WHERE kd_kelas = '$_GET[id]'");
    echo "<script>alert('Data Terubah')</script>";
    echo "<script>document.location.href = '?kelas-admin'</script>";
}
?>
<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Input Data Kelas</h3>
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
    <form action="" method="post"  enctype="multipart/form-data">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="basicInput">Kelas</label>
                            <input type="text" class="form-control" id="basicInput" name="kelas" placeholder="Masukkan Kelas" value="<?php echo @$edit['kelas']?>">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Kd. Guru</label>
                            <input type="number" class="form-control" id="basicInput" name="kd_guru" placeholder="Masukkan Kd. Guru" value="<?php echo @$edit['kd_guru']?>">
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <?php
                            if(isset($_GET['edit'])){ ?>
                                <input type="submit" name="update" value="Update" class="btn btn-primary me-1 mb-1">
                            <?php }else{ ?>
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary me-1 mb-1">
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Kelas</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Kelas
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Kd. Guru</th>
                            <th>Nama Guru</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = mysqli_query($con, "SELECT a.kelas, a.kd_guru, b.nama FROM tb_kelas AS a JOIN tb_guru AS b ON a.kd_kelas = b.kd_guru ORDER BY kelas ASC");
                            $no = 0;
                            while($data = mysqli_fetch_array($sql)){
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $data['kelas']?></td>
                            <td><?php echo $data['kd_guru']?></td>
                            <td><?php echo $data['nama']?></td>
                            <td><a href="?kelas-admin&edit&id=<?php echo $data['kd_kelas']?>" class="btn btn-warning">Edit</a>
                                <a href="?kelas-admin&hapus&id=<?php echo $data['kd_kelas']?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>

    </section>
    </form>
    <!-- Basic Tables end -->
</div>
        </div>