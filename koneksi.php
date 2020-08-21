<?php

$dbhost = "localhost";
$dbname = "id14328252_pendaftaran_mahasiswa";
$dbuser = "id14328252_admin";
$dbpassword = "pZP06Nyd>XBHAQJc";

$koneksi = mysqli_connect($dbhost,$dbuser,$dbpassword) or die ("Koneksi ke server error!");
mysqli_select_db($koneksi,$dbname) or die ("Koneksi ke database error!");

?>