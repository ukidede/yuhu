<?php
include 'koneksi.php';
$id = $_GET["id"];
$cek = query("SELECT * FROM datapengunjung WHERE id = $id ")[0];
if (isset($_POST["submit"])) {
    if (edit($_GET) > 0) {

        echo " 
                        <script>
                                alert('Data Berhasil Di Edit !' );
                                document.location.href = 'datapengunjung.php';
                        </script>
                ";
    } else {
        echo " 
                <script>
                        alert('Data Gagal Di Edit !' );
                        document.location.href = 'datapengunjung.php';
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
  <p>Silakan mengedit data pengunjung pada form dibawah ini.....!</p>
  <form action="edit-fungsi.php"method="POST" class="needs-validation" novalidate>
  <input type="hidden" nama="id" value="<?= $cek["id"];?>">
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda" name="nama" required value="<?= $cek["nama"]; ?>" >
      <div class="invalid-feedback">Nama harus diisi......!</div>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat Lengkap:</label>
      <input type="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Lengkap Anda" name="alamat" required  value="<?= $cek["alamat"]; ?>" >
      <div class="invalid-feedback">Alamat lengkap harus diisi.......!</div>
    </div>
    <div class="form-group">
      <label for="notelepon">No.Telepon:</label>
      <input type="notelepon" class="form-control" id="notelepon" placeholder="Masukkan Notelepon Anda" name="notelepon" required value="<?= $cek["notelepon"]; ?>">
      <div class="invalid-feedback">No.Telepon harus diisi.......!</div>
    </div><div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" name="email" required value="<?= $cek["email"]; ?>">
      <div class="invalid-feedback">Email lengkap harus diisi.......!</div>
    </div><br>
    <button type="submit" class="btn btn-primary" name="update">Simpan</button>
    <button type="button" class="btn btn-secondary"onclick="self.history.back()">Cancel</button>
    <input type="hidden" name="id"value="<?php echo $cek['id']; ?>">
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