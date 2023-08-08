<?php
    include "../koneksi.php";
?>
<style>
    .content{
        font-size: 18px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .content label{
        font-size: 18px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>
<center style="font-family: Georgia, 'Times New Roman', Times, serif;">
<h2>HASIL PENCAPAIAN KOMPOTENSI SISWA</h2>
</center>
<?php
    if(isset($_GET['cetak'])){
    $sql  = mysqli_query($con, "SELECT * FROM tb_nilai WHERE kd_nilai = '$_GET[id]'");
    $data = mysqli_fetch_array($sql);
    }
?>
<div class="content">
<br>
<label>NIS :</label>
<?php echo @$data['nis']?> <br>
<label>Nama :</label>
<?php echo @$data['nama']?> <br>
<label>Jurusan :</label>
<?php echo @$data['jurusan']?> <br>
<label>Kelas :</label>
<?php echo @$data['kelas']?> <br>
<label>Tanggal Penilaian :</label>
<?php echo @$data['tgl_penilaian']?> <br>
<br>
</div>
<table border="1" width="500px" height="150px" style="border-collapse:collapse; border-color:blue" align="center">
    <tr>
        <td><b>Mata Pelajaran</b></td>
        <td><b>Nilai Ujian</b></td>
    </tr>
    <tr>
        <td>Pendidikan Jasmani dan Rohani</td>
        <td><?php echo @$data['pjok']?></td>
    </tr>
    <tr>
        <td>Bahasa Inggris</td>
        <td><?php echo @$data['b_ingg']?></td>
    </tr>
    <tr>
        <td>Pendidikan Kewarganegaraan</td>
        <td><?php echo @$data['ppkn']?></td>
    </tr>
    <tr>
        <td>Bahasa Sunda</td>
        <td><?php echo @$data['b_sunda']?></td>
    </tr>
    <tr>
        <td>Pendidikan Agama Islam</td>
        <td><?php echo @$data['pai']?></td>
    </tr>
    <tr>
        <td>Matematika</td>
        <td><?php echo @$data['mtk']?></td>
    </tr>
    <tr>
        <td>Bahasa Indonesia</td>
        <td><?php echo @$data['b_indo']?></td>
    </tr>
    <tr>
        <td>Seni Budaya</td>
        <td><?php echo @$data['sbk']?></td>
    </tr>
    <tr>
        <td><b><i>Keterangan</i></b></td>
        <td></td>
    </tr>
    <tr>
        <td>Total</td>
        <td><?php echo @$data['total']?></td>
    </tr>
    <tr>
        <td>Rata-rata</td>
        <td><?php echo @$data['rerata']?></td>
    </tr>
    <tr>
        <td>Predikat</td>
        <td><?php echo @$data['predikat']?></td>
    </tr>
</table>
<br>
<center>
<label><h1><?php echo @$data['status']?></h1></label>
<br><br>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</center><hr>
<br>
<br>
<div align="right">
    Mengetahui<br>
    Kepala Sekolah
    <br>
    <br>
    <img src="http://blog.privy.id/wp-content/uploads/2018/02/4.png" width="100px" height="80px"> 
</div>
<br>
<br>
<br>
<br>
<br>
<footer align="left">
    copyright by azmrfii
</footer>
<script>
    window.print();
</script>