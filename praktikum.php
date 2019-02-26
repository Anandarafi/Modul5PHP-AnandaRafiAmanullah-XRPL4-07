<?php

echo "Cara Mencari Luas Layang Layang <br>";
function luas_layanglayang ($d1, $d2){
    return 1/2 * $d1 * $d2;
}
//pemanggilan fungsi luas
$a = 30;
$b = 25;
echo "Untuk Rumus mencari Luas Layang-Layang = 1/2 * d1 *d2 (dengan satuan hasil cm^2)";
echo "<br>";
echo " Luas Layang Layang dengan diagonal 1 = $a cm dan diagonal 2 = $b cm adalah  " ;
echo luas_layanglayang ($a, $b);
echo " cm^2";
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "Cara Mencari Keliling Sebuah Layang Layang<br>";
function keliling_layanglayang($a, $b, $c, $d){
    return $a + $b + $c + $d;
}
//pemanggilan fungsi keliling
$q = 20;
$w = 40;
$e = 10;
$r = 90;
echo "Untuk Rumus mencari Keliling Layang Layang = a + b + c + d (dengan satuan hasil cm)";
echo "<br>";
echo "Keliling Layang Layang dengan a = $q cm, b = $w cm, c = $e cm, dan d = $r cm adalah  ";
echo keliling_layanglayang ($q, $w, $e, $r);
echo " cm"; 
?>