<?php
include "koneksi2.php";
if (isset($_POST['update'])) {
    // print_r($_POST);
    $updateSql = mysqli_query($conn, "UPDATE  databooking SET
    ruang='$_POST[ruang]',
    nama='$_POST[nama]',
    alamat='$_POST[alamat]',
    notelepon='$_POST[notelepon]'
    WHERE id='$_POST[id]'
    ");
    if ($updateSql) {
        echo "<script type='text/javascript'>alert('Data Berhasil diedit...!'); location.href=\"databooking.php\";</script>";
    } else {
        echo "<script type='text/javascript'>alert('Data Gagal diedit...!'); location.href=\"databooking.php\";</script>";
    }
}
