<?php

include 'koneksi1.php';
$id = $_GET["id"];
$tampilkan = query("SELECT * FROM datapengurus WHERE id =$id ")[0];
if (isset($_POST["submit"])) {
  if (edit($_GET) > 0) {

    echo " 
                    <script>
                            alert('Data Berhasil Di Edit !' );
                            document.location.href = 'datapengurus.php';
                    </script>
            ";
  } else {
    echo " 
            <script>
                    alert('Data Gagal Di Edit !' );
                    document.location.href = 'datapengurus.php';
            </script>
            ";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Edit Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <h2>Edit data</h2>
    <p>Silakan mengedit data pengusrus pada form dibawah ini.....!</p>
    <form action="edit-fungsi.php" method="POST" class="needs-validation" novalidate>
      <input type="hidden" name="id" value="<?= $tampilkan["id"]; ?>">
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda" name="nama" required value="<?= $tampilkan["nama"]; ?>" >
        <div class="invalid-feedback">Nama harus diisi......!</div>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat Lengkap:</label>
        <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Lengkap Anda" name="alamat" required  value="<?= $tampilkan["alamat"]; ?>" >
        <div class="invalid-feedback">Alamat lengkap harus diisi.......!</div>
      </div>
      <div class="form-group">
        <label for="notelepon">No.Telepon:</label>
        <input type="text" class="form-control" id="notelepon" placeholder="Masukkan Notelepon Anda" name="notelepon" required  value="<?= $tampilkan["notelepon"]; ?>" >
        <div class="invalid-feedback">No.Telepon harus diisi.......!</div>
      </div>
      <div class="form-group">
        <label for="bidangpekerjaan">Bidang Pekerjaan:</label>
        <input type="text" class="form-control" id="bidangpekerjaan" placeholder="Masukkan bidangpekerjaan Anda" name="bidangpekerjaan" required  value="<?= $tampilkan["bidangpekerjaan"]; ?>" >
        <div class="invalid-feedback">bidangpekerjaan lengkap harus diisi.......!</div>
      </div><br>
      <button type="submit" class="btn btn-primary" name="update">Simpan</button>
      <button type="button" class="btn btn-secondary" onclick="self.history.back()">Cancel</button>
    </form>
  </div>

  <script>
    // Disable form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>

</body>

</html>