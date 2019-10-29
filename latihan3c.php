 <HTML>
<HEAD>
    <title>Simpan Buku Tamu</title>
</HEAD>
<BODY>
    <h1>Simpan Buku Tamu MySQL</h1>
<?php
    $Nama = $_POST["Nama"];
    $Email = $_POST["Email"];
    $Komentar = $_POST["Komentar"];
    $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
    mysqli_select_db($conn,"tamu");
    echo "Nama : $Nama <br>";
    echo "Email : $Email <br>";
    echo "Komentar : $Komentar <br>";
    $sqlstr="insert into bukutamu (Nama,Email,Komentar)
    values ('$Nama','$Email','$Komentar')";
    $hasil = mysqli_query($conn,$sqlstr);
    echo "Simpan bukutamu berhasil dilakukan";
?>
</BODY>
</HTML>