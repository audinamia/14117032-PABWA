<?php
require 'Function.php';
$mahasiswa = query("SELECT NRP,Nama,Alamat,Jurusan FROM mahasiswa NATURAL JOIN jurusan WHERE mahasiswa.ID_Jur=jurusan.ID_Jur");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>

    <h1>DAFTAR MAHASISWA</h1>

    <a href="Tambah.php">Tambah data mahasiswa</a>
    <br><br>
    <a href="Hapus.php">Hapus data mahasiswa</a>
    <br><br>
    <a href="Search.php">Search Data Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>
    <tr>
        <td><? $i; ?></td>
        <td><?= $row['NRP']; ?></td>
        <td><?= $row['Nama']; ?></td>
        <td><?= $row['Alamat']; ?>></td>
        <td><?= $row['Jurusan']; ?></td>
    </tr> 
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>
    
</body>
</html>