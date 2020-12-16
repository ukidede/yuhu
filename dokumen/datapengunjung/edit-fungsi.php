<?php
include "koneksi.php";
if (isset($_POST['update'])) {
    // print_r($_POST);
    $updateSql = mysqli_query($conn, "UPDATE datapengunjung SET
    nama='$_POST[nama]',
    alamat='$_POST[alamat]',
    notelepon='$_POST[notelepon]',
    email='$_POST[email]' 
    WHERE id='$_POST[id]'
    ");
    if ($updateSql) {
        echo "<script type='text/javascript'>alert('Data Berhasil Diedit'); location.href=\"datapengunjung.php\";</script>";
    } else {
        echo "<script type='text/javascript'>alert('Data Gagal diedit...!'); location.href=\"datapengunjung.php\";</script>";
    }
}
