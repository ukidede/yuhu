<?php
include 'koneksi1.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo " 
    <script>
            alert('Data Berhasil Di Hapus ' );
            document.location.href = 'datapengurus.php';
    </script>
";
} else {
    echo " 
    <script>
            alert('Data Tidak Berhasil Di Hapus !' );
            document.location.href = 'datapengurus.php';
    </script>
";
}
