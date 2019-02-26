<?php
function luas_layanglayang ($d1, $d2){
    return 1/2 * $d1 * $d2;
}
//pemanggil fungsi luas
$a = 30;
$b = 25;
echo " Luas Layang Layang dengan diagonal 1 $a cm dan diagonal 2 $b cm adalah  cm^2";
echo luas_layanglayang ($a, $b);
?>