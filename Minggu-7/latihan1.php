<?php
function swap(&$x, &$y){
    $temp;
    $temp  = $x;
    $x = $y;
    $y = $temp;
}
$x = 10;
$y = 7;

echo "Nilai sebelum ditukar :  ($x, $y) <br>";
swap($x, $y);
echo "Nilai setelah ditukar :  ($x, $y)";

?>