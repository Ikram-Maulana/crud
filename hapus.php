<?php

//  Cek apakah sudah login
session_start();
if($_SESSION['status']!="login"){
  header("location:login.php?pesan=belum_login");
}

// Koneksi Database
include 'koneksi.php';

// Menangkap data id yang dikirim dari url
$id = $_GET['id'];

// Menghapus data dari database
mysqli_query($koneksi,"delete from calon_mahasiswa where id='$id'");


// mengalihkan halaman kembali ke admin.php
header("location:admin.php");

?>