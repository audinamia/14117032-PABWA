<?php 
    setcookie("test_cookie", "test", time() + 3600, '/'); 
?>   
<html>   
<body> 
<?php 
if(count($_COOKIE) > 0) {   
    echo "Cookies enabled.";   
}else {   
    echo "Cookies disabled.";   
} 
?>  
<!-- analisis disini --> 
<!-- Dengan browser tanpa incongnito maka outputnya "Cookies enabled" 
    hal ini terjadi untuk cookies normal. cookie aktif agar fungsinya dapat
    berfungs-->
</body>   
</html>