<?php
include "koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Toya Bungkah</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../img/toyabungkah1.jpg" alt="" /></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../datapengurus/datapengurus.php">Data Pengurus</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../datapengunjung/datapengunjung.php">Data Pengunjung</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../databooking/databooking.php">Data Booking</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../logout.php">logout</a></li>
            </ul>
        </div>
    </nav>
        <!-- Data Pengunjung-->
        <section class="resume-section" id="datapengunjung">
            <div class="resume-section-content">
            <h1 class="text-center"> Data Pengunjung</h1>
                <?php
                $tampil = mysqli_query($conn, "SELECT * FROM datapengunjung")
                ?>
                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
                    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
                </head>

                <body>
                    <div class="container">
                        <p><a href="tambah.php"><button type="button" class="btn btn-primary">Tambah Data</button></p></a>
                        <table class="table table-dark table-hover">

                            <head>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">No.Telepon</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no =1;
                                    while ($r = mysqli_fetch_array($tampil)) {
                                        echo
                                            "<tr>
                        <td>$no</td>
                        <td>$r[nama]</td>
                        <td>$r[alamat]</td>
                        <td>$r[notelepon]</td>
                        <td>$r[email]</td>
                        <td>
                        <a href ='edit.php?id=$r[id]'><button type='button' class='btn btn-success btn-sm'>Edit</button></a>
                        <a href ='hapus.php?id=$r[id]'><button type='button' class='btn btn-warning btn-sm'>Hapus</button></a>
                        </td>
                </tr>";
                $no++;
                                    }
                                    ?>
                                </tbody>
                        </table>
                    </div>
                </body>

                </html>
                <!-- Bootstrap core JS-->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
                <!-- Third party plugin JS-->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
</body>

</html>