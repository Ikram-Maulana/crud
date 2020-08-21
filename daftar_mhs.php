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
  <style>
  .table {
    text-align: center;
  }
  </style>

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

  <title>Data Pendaftar</title>
</head>

<body oncontextmenu="return false;">
  <!-- Awal Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-custom">
    <div class="container">
      <a class="navbar-brand" href="#">UMMI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="about.php">About</a>
          <a class="nav-item nav-link active av" href="about.php">Data</a>
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

  <!-- Data -->
  <div class="data1">
    <h2>Data Pendaftar</h2>
    <a href="index.php" class="btn btn-danger data">Kembali</a>
    <div class="table-responsive text-nowrap">
      <table class="table table-striped" border="1px">
        <thead class=" thead-dark">

          <tr>
            <th>NO</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Asal Sekolah</th>
            <th>Nomor HP</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
          </tr>
        </thead>
        <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from calon_mahasiswa");
    while($d = mysqli_fetch_array($data)){
      ?>
        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama'];  ?></td>
            <td><?php echo $d['jk']; ?></td>
            <td><?php echo $d['alamat'] ?></td>
            <td><?php echo $d['agama'] ?></td>
            <td><?php echo $d['asal_sekolah'] ?></td>
            <td><?php echo $d['nomor_hp'] ?></td>
            <td><?php echo $d['tempat_lahir'] ?></td>
            <td><?php echo $d['tanggal_lahir'] ?></td>
          </tr>
        </tbody>
        <?php
    }
    ?>
      </table>
    </div>
  </div>
  <!-- akhir data -->

  <!-- Footer -->
  <footer>
    <p class=" footer-bottom-text">All Right reserved by &copy;Ikram Maulana 2020.</p>
  </footer>
  <!-- AKhir footer -->

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