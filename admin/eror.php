<?php
//buat koneksi dengan MySQL
$link=mysqli_connect("localhost","root","","db_akademik");

$result=mysqli_query($link, "SELECT * FROM tb_guru");
while ($row=mysqli_fetch_array($result, MYSQLI_NUM))
 {
   echo "$row[0] $row[1] $row[2] $row[3] $row[4] $row[5] $row[6] $row[7] $row[8] $row[9] $row[10]";
   echo "<br />";
 }
?>