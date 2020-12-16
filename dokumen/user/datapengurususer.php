<?php
include "../koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Data Pengurus-->
 <section class="resume-section" id="datapengurus">
            <div class="resume-section-content">
                <h1 class="text-center"> Data Pengurus</h1><br>
                <?php
                $tampil = mysqli_query($conn, "SELECT * FROM datapengurus")
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
                        <table class="table table-dark table-hover">

                            <head>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">No.Telepon</th>
                                    <th class="text-center">Bidang Pekerjaan</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    while ($r = mysqli_fetch_array($tampil)) {
                                        echo
                                        "<tr>
                                        <td>$no</td>
                                        <td >$r[nama]</td>
                                        <td>$r[alamat]</td>
                                        <td>$r[notelepon]</td>
                                        <td>$r[bidangpekerjaan]</td>
                                </tr>";
                                $no++;
                                    }
                                    ?>
                                </tbody>
                        </table>
                        <p><a href ="logout1.php"><button type="button" class="btn btn-primary">Logout</button></p></a>
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