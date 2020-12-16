<?php

include 'koneksi2.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo " 
    <script>
            alert('Data Berhasil Di Hapus ' );
            document.location.href = 'databooking.php';
    </script>
";
} else {
    echo " 
    <script>
            alert('Data Tidak Berhasil Di Hapus !' );
            document.location.href = 'databooking.php';
    </script>
";
}
