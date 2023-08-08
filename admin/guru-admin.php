<?php
    include "../koneksi.php";
    //save code
    if(isset($_POST['simpan'])){
        $lokasi_file = $_FILES['gambar']['tmp_name'];
        $tipe_file   = $_FILES['gambar']['type'];
        $nama_file   = $_FILES['gambar']['name'];
        $direktori   = "gambar/$nama_file";
        move_uploaded_file($lokasi_file, $direktori);
        mysqli_query($con, "INSERT INTO tb_guru VALUES('', '$_POST[nama]', '$_POST[jk]', '$_POST[tgl_lahir]',
                    '$_POST[alamat]', '$_POST[no_hp]', '$_POST[kd_mapel]', '$direktori', '$_POST[username]', '$_POST[password]', '$_POST[jabatan]')");
        echo "<script>alert('Data Tersimpan')</script>";
        echo "<script>document.location.href = '?guru-admin'</script>";
    }
    //delete code
    if(isset($_GET['hapus'])){
        mysqli_query($con, "DELETE FROM tb_guru WHERE kd_guru = '$_GET[id]'");
        echo "<script>alert('Data Terhapus')</script>";
        echo "<script>document.location.href = '?guru-admin'</script>";
    }
    //edit code
    if(isset($_GET['edit'])){
        $ed = mysqli_query($con, "SELECT * FROM tb_guru WHERE kd_guru = '$_GET[id]'");
        $edit = mysqli_fetch_array($ed);
    }
    //update code
    if(isset($_POST['update'])){
        $lokasi_file = $_FILES['gambar']['tmp_name'];
        $tipe_file   = $_FILES['gambar']['type'];
        $nama_file   = $_FILES['gambar']['name'];
        $direktori   = "gambar/$nama_file";
        move_uploaded_file($lokasi_file, $direktori);
        mysqli_query($con, "UPDATE tb_guru SET nama = '$_POST[nama]', jk = '$_POST[jk]', tgl_lahir = '$_POST[tgl_lahir]',
                    alamat = '$_POST[alamat]', no_hp = '$_POST[no_hp]', kd_mapel = '$_POST[kd_mapel]', gambar = '$direktori', username = '$_POST[username]',
                    password = '$_POST[password]', jabatan = '$_POST[jabatan]' WHERE kd_guru = '$_GET[id]'");
        echo "<script>alert('Data Terubah')</script>";
        echo "<script>document.location.href = '?guru-admin'</script>";
    }
?>
<form action="" method="post"  enctype="multipart/form-data">
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
                <h3>Input Data Guru</h3>
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
                            <label for="basicInput">Nama</label>
                            <input type="text" class="form-control" id="basicInput" name="nama" placeholder="Masukkan Nama" value="<?php echo @$edit['nama']?>">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Jenis Kelamin</label>
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="jk">
                                    <?php
                                        $jk = array("Laki-laki", "Perempuan");
                                        foreach($jk as $jk){
                                    ?>
                                    <option value="<?php echo $jk ?>" <?php if($jk == @$edit['jk']) echo "selected='selected'"?>><?php echo $jk ?></option>
                                    <?php } ?>
                                </select>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="basicInput" name="tgl_lahir" value="<?php echo @$edit['tgl_lahir']?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"><?php echo @$edit['alamat']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="basicInput">No. Hp</label>
                            <input type="number" class="form-control" id="basicInput" name="no_hp" placeholder="Masukkan Nama" value="<?php echo @$edit['no_hp']?>">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Kd. Mapel</label>
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="kd_mapel">
                                    <?php
                                        $mpl = array("1(Pemograman Web Bergerak)", "2(Pemograman Fundamental)","3(Matematika)","4(Bahasa Inggris)","5(Bahasa Indonesia)",
                                                    "6(Pendidikan Agama Islam)", "7(Gizi dan Kesehatan)");
                                        foreach($mpl as $mpl){
                                    ?>
                                    <option value="<?php echo $mpl ?>" <?php if($mpl == @$edit['kd_mapel']) echo "selected='selected'"?>><?php echo $mpl ?></option>
                                    <?php } ?>
                                </select>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Foto</label>
                            <input type="file" class="form-control" id="basicInput" name="gambar"><?php echo @$edit['gambar']?>
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Username</label>
                            <input type="text" class="form-control" id="basicInput" name="username" placeholder="Masukkan Username" value="<?php echo @$edit['username']?>">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Password</label>
                            <input type="password" class="form-control" id="basicInput" name="password" placeholder="Masukkan Password" value="<?php echo @$edit['password']?>">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Jabatan</label>
                            <input type="text" class="form-control" id="basicInput" name="jabatan" placeholder="Masukkan Jabatan" value="<?php echo @$edit['jabatan']?>">
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
                <h3>Data Guru</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Guru
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tgl_lahir</th>
                            <th>Alamat</th>
                            <th>No. Hp</th>
                            <th>Kd. Mapel</th>
                            <th>Foto</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Jabatan</th>
                            <th>Action</th>
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
                            <td><img src="<?php echo $data['gambar'] ?>" width="200px"></td>
                            <td><?php echo $data['username']?></td>
                            <td><?php echo $data['password']?></td>
                            <td><?php echo $data['jabatan']?></td>
                            <td><a href="?guru-admin&edit&id=<?php echo $data['kd_guru']?>" class="btn btn-warning">Edit</a>
                                <a href="?guru-admin&hapus&id=<?php echo $data['kd_guru']?>" class="btn btn-danger">Delete</a></td>
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