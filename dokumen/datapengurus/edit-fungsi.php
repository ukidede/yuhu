<?php
include "koneksi1.php";
if (isset($_POST['update'])) {
    // print_r($_POST);
    $updateSql = mysqli_query($conn, "UPDATE  datapengurus SET
    nama='$_POST[nama]',
    alamat='$_POST[alamat]',
    notelepon='$_POST[notelepon]',
    bidangpekerjaan='$_POST[bidangpekerjaan]' 
    WHERE id='$_POST[id]'
    ");
    if ($updateSql) {
        echo "<script type='text/javascript'>alert('Data Berhasil diedit...!'); location.href=\"datapengurus.php\";</script>";
    } else {
        echo "<script type='text/javascript'>alert('Data Gagal diedit...!'); location.href=\"datapengurus.php\";</script>";
    }
}
