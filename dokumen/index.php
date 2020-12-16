<?php
    include "koneksi.php";
    session_start();
    $login = $_SESSION['login'];
    if($login == "admin" ){
        header("location:../datatapengurus/datapengurus.php");
    }elseif($login == "user"){
      header("location:user/userindex.php");
    }else{
       header("location:login.php");
    }
?>