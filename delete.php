 <?php
include "koneksi.php";
$nik = $_GET['nik'];
mysqli_query($koneksi,"DELETE FROM tbl_siswa WHERE nik='$nik'");
header("location:index.php");
?> 