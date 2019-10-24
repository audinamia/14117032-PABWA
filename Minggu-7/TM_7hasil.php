<?php

if (isset($_POST["Submit"])) {
    $Nama = $_POST["Nama"];
    $Alamat = $_POST["Alamat"];
    $jk = $_POST["jk"];
    $Goldar = $_POST["Goldar"];
    $Hobby = $_POST["Hobby"];
    $Ket = $_POST["Ket"];
}

$Biodata = array(
    "Nama" => $Nama,
    "Alamat" => $Alamat,
    "jk" => $jk,
    "Goldar" => $Goldar,
    "Hobby" => $Hobby,
    "Ket" => $Ket
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Biodata</title>
</head>
    <h3>Isi Biodata</h3>
<body>

    <?php
    echo "Nama : " . $Nama;
    echo "<br/>";
    echo "Alamat : " . $Alamat;
    echo "<br/>";
    echo "Jenis Kelamin : " . $jk;
    echo "<br/>";
    echo "Gol.Darah : " . $Goldar;
    echo "<br/>"; 
    echo "Hobby : ";
    foreach ($Hobby as $value) {
        echo "$value, ";
    }
    echo "<br/>";
    echo "Keterangan : " . $Ket;
    echo "<br/>";
?>
</body>

</html>