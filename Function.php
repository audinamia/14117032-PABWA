<?php

$conn = mysqli_connect("localhost","root","","phpmysql");

function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $NRP = $data['NRP'];
    $Nama = $data['Nama'];
    $Alamat = $data['Alamat'];
    $Jurusan = $data['Jurusan'];

    $query = "INSERT INTO mahasiswa
            VALUES
            ('$NRP', '$Nama', '$Alamat', '$Jurusan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function Hapus($Nama){
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE Nama = $Nama");
    return mysqli_affected_rows($conn);
}

function search($keyword) {
    global $conn;

    $query = "SELECT * FROM mahasiswa WHERE Nama LIKE = '%$keyword'%";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

?>