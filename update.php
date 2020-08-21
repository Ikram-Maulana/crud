<?php

//  Cek apakah sudah login
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
  }

// Koneksi ke database
include 'koneksi.php';

// Menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$asal_sekolah = $_POST['asal_sekolah'];
$nomor_hp = $_POST['nomor_hp'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];

// update data ke database
mysqli_query($koneksi,"UPDATE `calon_mahasiswa` SET `nama`='$nama', `jk`='$jk', `alamat`='$alamat', `agama`='$agama', `asal_sekolah`='$asal_sekolah', `nomor_hp`='$nomor_hp', `tempat_lahir`='$tempat_lahir', `tanggal_lahir`='$tanggal_lahir' WHERE  `calon_mahasiswa`.`id`='$id'");

// mengalihkan halaman kembali ke admin.php
header("location:admin.php");
 
?>