<?php
include "koneksi2.php";
if(isset($_POST ['tambah'])){
    $insertSql = mysqli_query($conn,"INSERT into databooking (ruang,nama,alamat,notelepon)
    values
    ('$_POST[ruang]','$_POST[nama]','$_POST[alamat]','$_POST[notelepon]')");
    if($insertSql){
        echo "<script type='text/javascript'>alert('Data Berhasil disimpan...!'); location.href=\"databooking.php\";</script>";
    }
}
?>