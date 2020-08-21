<?php

// Koneksi ke database
include 'koneksi.php';

// Menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$asal_sekolah = $_POST['asal_sekolah'];
$nomor_hp = $_POST['nomor_hp'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];

// Menginput data ke database
$insert = mysqli_query($koneksi,"insert INTO calon_mahasiswa(nama,jk,alamat,agama,asal_sekolah, nomor_hp, tempat_lahir,
tanggal_lahir) VALUES
('".$nama."','".$jk."','".$alamat."','".$agama."','".$asal_sekolah."','".$nomor_hp."','".$tempat_lahir."','".$tanggal_lahir."')")
or die (mysqli_error($koneksi)) ;

// validasi
if ($insert) {
echo "<script>
alert('Data Berhasil Disimpan');
window.location = 'index.php';
</script>";
}else {
echo "<script>
alert('Data Gagal Disimpan');
window.location = 'daftar.php';
</script>";
}

?>