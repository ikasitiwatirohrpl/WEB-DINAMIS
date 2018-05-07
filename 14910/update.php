<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nis = $_POST['nis'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', alamat='$alamat', nis='$nis' where id='$id'");
 
// mengalihkan halaman kembali ke index2.php
header("location:index2.php");
 
?>