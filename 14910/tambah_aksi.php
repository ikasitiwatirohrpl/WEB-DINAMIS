<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nis','$alamat')");
 
// mengalihkan halaman kembali ke index2.php
header("location:index2.php");
 
?>