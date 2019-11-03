<?php
require 'Function.php';

$Nama = $_POST['Nama'];

if( isset($_POST['$search']) ){
    $mahasiswa = search($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Data</title>
</head>
<body>
    
    <h1>SEARCH DATA</h1>

    
    <form action="Admin.php" method="POST">
        <li>
            <input type="next" name="Nama"id="Nama" size="50" autofocus
            placeholder="Masukkan keyword berdasarkan NAMA" autocomplete="off">
            <button type="submit" nama="search">Cari Data</button>
        </li>
    </form>
    
</body>
</html> 