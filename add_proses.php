<?php
include "koneksi.php";

$nik        = $_POST['NIK'];
$nama       = $_POST['Nama'];
$gender     = $_POST['Gender'];
$alamat     = $_POST['Alamat'];
$umur       = $_POST['Umur'];
$jurusan    = $_POST['Jurusan'];

mysqli_query($koneksi,"INSERT INTO tbl_siswa VALUES('$nik','$nama','$gender','$alamat','$umur','$jurusan')");

header("location:index.php");
?>