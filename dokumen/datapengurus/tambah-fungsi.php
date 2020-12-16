<?php
include "koneksi1.php";
if(isset($_POST ['tambah'])){
    $insertSql = mysqli_query($conn,"INSERT into datapengurus (nama,alamat,notelepon,bidangpekerjaan)
    values
    ('$_POST[nama]','$_POST[alamat]','$_POST[notelepon]','$_POST[bidangpekerjaan]')");
    if($insertSql){
        echo "<script type='text/javascript'>alert('Data Berhasil disimpan...!'); location.href=\"datapengurus.php\";</script>";
    }
}
?>