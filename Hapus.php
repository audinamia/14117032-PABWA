<?php
require 'Function.php';

$Nama = $_POST['Nama'];

if( isset($_POST['$submit']) ){
    if( Hapus($Nama) > 0){
        echo "
            <script>
                alert('DATA BERHASIL DIHAPUS');
                document.location.href = 'Admin.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('DATA GAGAL DIHAPUS');
                document.location.href = 'Admin.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hapus Data</title>
</head>
<body>
    
    <h1>HAPUS DATA</h1>

    
    <form action="Admin.php" method="POST">
        <li>
            <label for="Nama">Nama : </label>
            <input type="next" name="Nama"id="Nama">
            <button type="submit" nama="submit" onclick=
            "return confirm('Anda yakin ingin menghapus data ?');">Hapus Data</button>
        </li>
    </form>
    
</body>
</html> 