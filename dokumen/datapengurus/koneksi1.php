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
    mysqli_query($conn, "DELETE FROM datapengurus WHERE id= $id");
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;
    $id = $data["id"];
    $nama = ($data["nama"]);
    $alamat = ($data["alamat"]);
    $notelepon = ($data["notelepon"]);
    $bidangpekerjaan = ($data["bidangpekerjaan"]);


    $query = "UPDATE  datapengurus SET
    nama='$nama',
    alamat='$alamat',
    notelepon='$notelepon',
    bidangpekerjaan='$bidangpekerjaan'
    WHERE id=$id ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>

