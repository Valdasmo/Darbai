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
echo '<br>'; echo '<br>'; echo '<br>';


echo '4. ';
$krastine1 = rand (1, 10);
$krastine2 = rand (1, 10);
$krastine3 = rand (1, 10);
if ($krastine1 < $krastine2 + $krastine3 ||$krastine2 < $krastine1 + $krastine3||$krastine3 < $krastine1 + $krastine2){
    echo 'Galimas trikampis: ' . $krastine1 . ', ' . $krastine2 . ', ' . $krastine3;
}
echo '<br>'; echo '<br>'; echo '<br>';


echo '5. ';
$skaicius1 = rand (0, 2);
$skaicius2 = rand (0, 2);
$skaicius3 = rand (0, 2);
$skaicius4 = rand (0, 2);
$nulis = 0;
$vienetas = 0;
$dvejetas = 0;
if ($skaicius1 == 0){
    $nulis++;
}
if ($skaicius2 == 0){
    $nulis++;
}
if ($skaicius3 == 0){
    $nulis++;
}
if ($skaicius4 == 0){
    $nulis++;
}
if ($skaicius1 == 1){
    $vienetas++;
}
if ($skaicius2 == 1){
    $vienetas++;
}
if ($skaicius3 == 1){
    $vienetas++;
}
if ($skaicius4 == 1){
    $vienetas++;
}
if ($skaicius1 == 2){
    $dvejetas++;
}
if ($skaicius2 == 2){
    $dvejetas++;
}
if ($skaicius3 == 2){
    $dvejetas++;
}
if ($skaicius4 == 2){
    $dvejetas++;
}
echo $skaicius1 . ', '. $skaicius2 . ', ' . $skaicius3 . ', ' . $skaicius4 . '.';
echo '  Nuliu: ' . $nulis . ', ' . 'Vienetu: ' . $vienetas . ', '. 'Dvejetu: ' . $dvejetas;

echo '<br>'; echo '<br>'; echo '<br>';


echo '6. ';
$skaicius = rand (1, 6);
echo '<h' . $skaicius . '>' . $skaicius . '</h' . $skaicius . '>';

echo '<br>'; echo '<br>'; echo '<br>';


echo '7. ';
$skaicius1 = rand (-10, 10);
$skaicius2 = rand (-10, 10);
$skaicius3 = rand (-10, 10);
if ($skaicius1 < 0){
    echo '<span style="Color:green">'.$skaicius1.'</span>';
}
elseif ($skaicius1 == 0) {
    echo '<span style="Color:red">'.$skaicius1.'</span>';
}
else {
    echo '<span style="Color:blue">'.$skaicius1.'</span>';
}

if ($skaicius2 < 0){
    echo '<span style="Color:green">'.$skaicius2.'</span>';
}
elseif ($skaicius2 == 0) {
    echo '<span style="Color:red">'.$skaicius2.'</span>';
}
else {
    echo '<span style="Color:blue">'.$skaicius2.'</span>';
}

if ($skaicius3 < 0){
    echo '<span style="Color:green">'.$skaicius3.'</span>';
}
elseif ($skaicius3 == 0) {
    echo '<span style="Color:red">'.$skaicius3.'</span>';
}
else {
    echo '<span style="Color:blue">'.$skaicius3.'</span>';
}

// $Color = "red";
// $Text = "This text is red";

// echo '<div style="Color:'.$Color.'">'.$Text.'</div>';
// echo '<span style="Color:red">This text is red</span>';
echo '<br>'; echo '<br>'; echo '<br>';


echo '8. ';
$zvake = rand(5,3000);
$kaina = $zvake * 1;
if ($kaina>2000) {
    $kainaFinale = $kaina - ($kaina/100*4);
}
elseif ($kaina>1000) {
    $kainaFinale = $kaina - ($kaina/100*3);
}
else {
    $kainaFinale = $kaina;
}

echo $zvake.': vnt. - kaina: '.$kainaFinale.' Eur';

echo '<br>'; echo '<br>'; echo '<br>';


echo '9. ';
$kintamas1 = rand (0, 100);
$kintamas2 = rand (0, 100);
$kintamas3 = rand (0, 100);
echo 'Aritmetinis vidurkis kintamuju: '.$kintamas1.', '.$kintamas2.', '.$kintamas3.' = '.$aritvid = ($kintamas1+$kintamas2+$kintamas3)/3;
if ($kintamas1<10 || $kintamas1>90) {
    $kintamas1 = 0;
}
if ($kintamas2<10 || $kintamas2>90) {
    $kintamas1 = 0;
}
if ($kintamas3<10 || $kintamas3>90) {
    $kintamas1 = 0;
}
echo'<br>';

echo 'Aritmetinis vidurkis kintamuju su salyga: '.$kintamas1.', '.$kintamas2.', '.$kintamas3.' = '.$aritvidribotas = ($kintamas1+$kintamas2+$kintamas3)/3;

echo '<br>'; echo '<br>'; echo '<br>';


echo '10. ';
