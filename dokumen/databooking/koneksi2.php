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
    mysqli_query($conn, "DELETE FROM databooking WHERE id= $id");
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;
    $id = $data["id"];
    $ruang = ($data["ruang"]);
    $nama = ($data["nama"]);
    $alamat = ($data["alamat"]);
    $notelepon = ($data["notelepon"]);
    


    $query = "UPDATE  databooking SET
    ruang=$ruang',
    nama='$nama',
    alamat='$alamat',
    notelepon='$notelepon',
    WHERE id=$id ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>

