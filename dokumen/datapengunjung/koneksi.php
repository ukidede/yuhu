<?php
$conn = mysqli_connect("localhost", "root", "", "crudnative");

/*if($conn){
    echo"Koneksi Sukses";
}else{
    echo"Koneksi Gagal";
}*/

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM datapengunjung WHERE id= $id");
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;
    $id = $data["id"];
    $nama = ($data["nama"]);
    $alamat = ($data["alamat"]);
    $notelepon = ($data["notelepon"]);
    $email = ($data["email"]);


    $query = "UPDATE datapengunjung SET
    nama='$nama',
    alamat='$alamat',
    notelepon='$notelepon',
    email='$email'
    WHERE id=$id ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>

