<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="style.css">

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

  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

  <title>Form Pendaftaran</title>
</head>

<body oncontextmenu="return false;">
  <!-- Awal Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-custom">
    <div class="container">
      <a class="navbar-brand" href="index.php">UMMI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="about.php">About</a>
          <a class="nav-item nav-link active av" href="daftar.php">Daftar</a>
          <a class="nav-item nav-link" href="login.php">Admin</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Universitas <br> Muhammadiyah <br> Sukabumi</h1>
    </div>
  </div>
  <!-- Akhir Jumbotron -->

  <!-- ISI -->
  <div class="daftar">
    <h2>Daftar Menjadi Mahasiswa</h2>
    <form method="POST" action="proses_daftarno.php">
      <div class="form-group">
        <label for="exampleFormControlInput1">Nama Lengkap</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" name="nama" onpaste="restrict(this);"
          onkeypress="restrict(this);" onkeyup="restrict(this);">
      </div>
      <label for=" exampleFormControlInput1">Jenis Kelamin</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="Laki-Laki">
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
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Alamat</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea1" name="alamat"
          onpaste="restrict3(this);" onkeypress="restrict3(this);" onkeyup="restrict3(this);">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Agama</label>
        <select class="custom-select" name="agama">
          <option selected>Pilih...</option>
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
          onpaste="restrict2(this);" onkeypress="restrict2(this);" onkeyup="restrict2(this);">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Nomor HP</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nomor_hp" onpaste="restrict4(this);"
          onkeypress="restrict4(this);" onkeyup="restrict4(this);">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tempat Lahir</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="tempat_lahir"
          onpaste="restrict(this);" onkeypress="restrict(this);" onkeyup="restrict(this);">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Tanggal Lahir</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal_lahir">
      </div>
      <button type="submit" class="btn btn-primary tombol">Daftar</button>
      <a href="index.php" class="btn btn-danger">Kembali</a>
    </form>
  </div>
  <!-- Akhir ISI -->

  <!-- Footer -->
  <footer>
    <p class="footer-bottom-text">All Right reserved by &copy;Ikram Maulana 2020.</p>
  </footer>
  <!-- AKhir footer -->

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

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
</body>

</html>