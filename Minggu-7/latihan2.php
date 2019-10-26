<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href=" css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

    <form method="GET" action="">
        <label for="nama">nama</label>
        <input type="text" name="nama"><br>
        <label for=" color">color</label>

        <select name="color">
            <option value="#cd5c5c">Pink</option>  
            <option value="#00ff00">Green</option>        
            <option value="#ff0000">Red</option>
            <option value="#ffff00">Yellow</option>
            <option value="#000080">Blue</option>
        </select>

         <br>
         <input type="submit" name="submit" value="submit">

    </form>

    <?php

        if(isset($_GET['submit'])){
            $x = $_GET['nama'];
            $y = $_GET['color'];

            function karakter($nama){
                if (strlen($nama > 20)){
                    return ((strlen($nama)) * 700);
                }else if (strlen($nama > 11)){
                    return ((strlen($nama)) * 500);
                }else {
                    return ((strlen($nama)) * 300);
                }
            }

            echo "<br>";
            echo "<font color='$y'>Nama $x <br>";
            echo "<font color='$y'>Harga bet untuk nama $x adalah " . karakter($x);
        }
    
        ?>
</body>
</html>