<?php
session_start();
$state = $_SESSION['state'];
if ($state != "login") {
  header('Location: index_login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provisioning Menu</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="css/style-click.css">
    <script type="js/jquery.min"></script>
</head>

<body>
    <header>
      <div class="container">
        <div id="branding">
            <a href="index.php">
          <img src="https://www.nyse.com/publicdocs/nyse/events/images/TLK_WEB_1920.png" style="width:250px;height:145px;">
            </a>
        </div>
      </div>
    </header>

    <section id="headtext">
      <div class="container">
          <h2> Layanan Pengisian Provisioning </h2>
      </div></section>

<form class="form-basic" method="POST" action="insert_provisioning.php">
    <h4 class="text-center">Isikan data sesuai dengan form di bawah ini</h4>
<div class="form-group">
        <label for="text-input" class="control-label">Nama Teknisi</label>
        <select class="form-control" name="Nama_Teknisi" id="Nama_Teknisi" required="">
            <option value="">Nama Teknisi</option>
            <option value="amija1">AMIJA1</option>
            <option value="amija2">AMIJA2</option>
        </select>
    </div>
    <div class="form-group">
        <label for="text-input" class="control-label">Kode Angka QR</label>
        <input type="text" name="Kode_Angka_QR" class="form-control" id="Kode_Angka_QR" placeholder="Masukan kode angka QR" required="">
    </div>
    <div class="form-group">
        <label for="text-input" class="control-label">Nama ODP</label>
        <input type="text" name="Nama_ODP" class="form-control" id="Nama_ODP" placeholder="Masukan nama ODP" required="">
    </div>
    <div class="form-group">
        <label for="text-input" class="control-label">Port ODP</label>
        <input type="text" name="Port_ODP" class="form-control" id="Port_ODP" placeholder="Masukan port ODP" required="">
    </div>
    <div class="form-group">
        <label for="text-input" class="control-label">Nomor Service</label>
        <input type="number" name="No_Service" class="form-control" id="No_Service" placeholder="Masukan nomor service" required="">
    </div>
    <div class="form-group">
        <label for="text-input" class="control-label">SN ONT</label>
        <input type="text" name="SN_ONT" class="form-control" id="SN_ONT" placeholder="Masukan SN ONT" required="">
    </div>
    <div class="form-group">
        <label class="control-label">Catatan:</label>
        <p class="form-static-control">Harap periksa kembali data yang sudah Anda masukan. Form tidak boleh ada yang kosong.</p>
    </div>
    <div class="form-group">
        <button class="btn btn-success btn-block" type="submit">Submit</button>
    </div>
</form>

    <footer>
      <p> Telekomunikasi Indonesia, Copyright ©2017 </p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
