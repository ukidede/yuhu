<?php
include "koneksi.php";
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username ='$username' AND password ='$password'");
        if(mysqli_num_rows($query) !== 0){
            $get = mysqli_fetch_array($query);
            $level = $get['level'];
            $nama = $get['nm_admin'];
            $_SESSION['nama'] = $nama;
            $_SESSION['login_in'] = $username;
            if ($level == "admin") {
                echo "<script type='text/javascript'>alert('Selamat Datang $level'); location.href=\"datapengurus/datapengurus.php\";</script>";
            } elseif ($level == "user") {
                echo "<script type='text/javascript'>alert('Selamat Datang $level'); location.href=\"user/userindex.php\";</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('username atau password salah !'); location.href=\"login.php\"; </script>";
        }
    }
 ?>