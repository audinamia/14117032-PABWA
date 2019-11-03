<?php
require 'Function.php';

if( isset($_POST['$submit'])){
    if( tambah($_POST) > 0 ){
        echo "
            <script>
                alert('DATA BERHASIL DITAMBAHKAN');
                document.location.href = 'Admin.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('DATA GAGAL DITAMBAHKAN');
                document.location.href = 'Admin.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    
    <h1>TAMBAH DATA</h1>

    <form action="" method="POST">
        <li>
            <label for="NRP">NRP : </label>
            <input type="text" name="NRP"id="NRP" required>
        </li>
        <li>
            <label for="Nama">Nama : </label>
            <input type="text" name="Nama"id="Nama">
        </li>
        <li>
            <label for="Alamat">Alamat : </label>
            <input type="Alamat" name="Alamat"id="Alamat">
        </li>
        <li>
            <label for="Jurusan">Jurusan : </label>
            <select class="form-control" name="Jurusan" id="Jurusan">
				<option value="Telekomunikasi">Telekomunikasi</option>
				<option value="IT">IT</option>
                <option value="Sains">Sains</option>
                <option value="Hukum">Hukum</option>
                <option value="Pertanian">Pertanian</option>
                <option value="Peternakan">Peternakan</option>
			</select>
        </li>
        <li>
            <button type="submit" nama="submit">Tambah</button>
        </li>
    </form>

</body>
</html>