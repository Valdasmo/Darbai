<?php
echo '1. ';
$vardas = 'Valdas';
$pavarde = 'Molis';
$gimimoMetai = 1967;
$dabartiniaiMetai = 2019;
$amzius = $dabartiniaiMetai - $gimimoMetai;
echo 'Aš esu '.$vardas .' '. $pavarde . '. Man yra '. $amzius . 'metai(ų).';
echo '<br>'; echo '<br>'; echo '<br>';


echo '2. ';
$var1 = rand (0, 4);
$var2 = rand (0, 4);
if ($var1 > $var2 && $var2 !==0){
    $var3 = $var1 / $var2; 
    echo $var1 . ':' . $var2 . ' = ' . round($var3, 2);
}
elseif ($var2 >= $var1 && $var1 !==0){
    $var3 = $var2 / $var1;
    echo $var2 . ':' . $var1 . ' = ' . round($var3, 2);
}
else {
    echo $var1 . ', ' . $var2 . ': vienasis skaiciu = 0';
}
echo '<br>'; echo '<br>'; echo '<br>';


echo '3. ';
$number1 = rand (0, 25);
$number2 = rand (0, 25);
$number3 = rand (0, 25);
if ($number1 > $number2 && $number2 > $number3 || $number1 < $number2 && $number2 < $number3){
    echo $number1 . ', ' . $number2 . ', ' . $number3 . '. Vidurine reiksme = ' . $number2;
}
elseif ($number2 > $number1 && $number1 > $number3 || $number2 < $number1 && $number1 < $number3){
    echo $number1 . ', ' . $number2 . ', ' . $number3 . '. Vidurine reiksme = ' . $number1;
}
elseif ($number1 > $number3 && $number3 > $number2 || $number1 < $number3 && $number3 < $number2){
    echo $number1 . ', ' . $number2 . ', ' . $number3 . '. Vidurine reiksme = ' . $number3;
}
else {
    echo 'Yra tarpusavy lygiu skaiciu: ' . $number1 . ', ' . $number2 . ', ' . $number3;
}