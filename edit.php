<?php

// Cek apakah ada data yang akan diedit
if (empty($_GET['id'])){
  header("location:admin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <title>Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="style_admin.css" rel="stylesheet">

</head>

<body oncontextmenu="return false;">

  <!-- Cek apakah sudah login -->
  <?php 
	session_start();
	if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
	}
  ?>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Admin Panel </div>
      <div class="list-group list-group-flush">
        <a href="admin.php" class="list-group-item list-group-item-action bg-light">Data</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-light">Logout</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-warning" id="menu-toggle">Sidebar</button>
      </nav>

      <div class="bungkus">
        <h2 class="mt-4">Edit data Mahasiswa</h2>

        <?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from calon_mahasiswa where id='$id'");
while($d = mysqli_fetch_array($data)){
?>
        <form action="update.php" method="post" class="form1">
          <div class="form-group">
            <label for="exampleFormControlInput1">Nama Lengkap</label>
            <input type="hidden" name="id" class="form-control" id="exampleFormControlInput1"
              value="<?php echo $d['id']; ?>">
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama"
              value="<?php echo $d['nama']; ?>" onpaste="restrict(this);" onkeypress="restrict(this);"
              onkeyup="restrict(this);">
          </div>

          <label for="exampleFormControlInput1">Jenis Kelamin</label>
          <?php if ($d['jk'] == "Perempuan") : ?>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="Laki-Laki">
            <label class="form-check-label" for="exampleRadios1">
              Laki-Laki
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Perempuan" checked>
            <label class="form-check-label" for="exampleRadios2">
              Perempuan
            </label>
          </div>
          <?php else : ?>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="Laki-Laki" checked>
            <label class="form-check-label" for="exampleRadios1">
              Laki-Laki
            </label>
          </div>
          <div class="form-check jr">
            <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Perempuan">
            <label class="form-check-label" for="exampleRadios2">
              Perempuan
            </label>
          </div>
          <?php endif; ?>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat"
              value="<?php echo $d['alamat']; ?>" onpaste="restrict3(this);" onkeypress="restrict3(this);"
              onkeyup="restrict3(this);">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Agama</label>
            <select class="custom-select" name="agama">
              <option value="<?php echo $d['agama']; ?>"><?php echo $d['agama']; ?></option>
              <option value="" disabled>-------</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Hindu">Hindu</option>
              <option value="Buddha">Buddha</option>
              <option value="Lainnya">Lainny</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Asal Sekolah</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="asal_sekolah"
              value="<?php echo $d['asal_sekolah']; ?>" onpaste="restrict2(this);" onkeypress="restrict2(this);"
              onkeyup="restrict2(this);">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Nomor HP</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nomor_hp"
              value="<?php echo $d['nomor_hp']; ?>" onpaste="restrict4(this);" onkeypress="restrict4(this);"
              onkeyup="restrict4(this);">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Tempat Lahir</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="tempat_lahir"
              value="<?php echo $d['tempat_lahir']; ?>" onpaste="restrict(this);" onkeypress="restrict(this);"
              onkeyup="restrict(this);">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Lahir</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal_lahir"
              value="<?php echo $d['tanggal_lahir']; ?>">
          </div>

          <button type="submit" class="btn btn-primary daftar">Simpan</button>
          <a href="admin.php" class="btn btn-danger kembali">Kembali</a>

        </form>
        <?php
}
?>
      </div>
    </div>
  </div>
  <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- No copy copy -->
  <script>
  document.onkeydown = function(e) {
    if (event.keyCode == 123) {
      return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
      return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
      return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
      return false;
    }
    if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
      return false;
    }
  }
  </script>

  <!-- My  Javascript Validate -->
  <script>
  var restrict = function(tb) {
    tb.value = tb.value.replace(/[^a-zA-Z  ]/g, '');
  };

  var restrict2 = function(tb) {
    tb.value = tb.value.replace(/[^a-zA-Z0-9 ]/g, '');
  };

  var restrict3 = function(tb) {
    tb.value = tb.value.replace(/[^a-zA-Z0-9'., ]/g, '');
  };

  var restrict4 = function(tb) {
    tb.value = tb.value.replace(/[^+0-9]/g, '');
  };
  </script>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>

</body>

</html>