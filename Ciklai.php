<?php
/* Naršyklėje nupieškite linija iš 400 “*”. 
Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; */

echo '1.-------------------------- ';
echo '<br>';
$i = 0;
for ($i=1; $i<=400; $i++){
    echo '<span style = "word-break: break-all;">*</span>';
}
echo '<br>'; echo '<br>';
for ($i=1; $i<=400; $i++){
    echo '*';
    if($i%50 == 0){
        echo '<br>';
    }
}
echo '<br>'; echo '<br>'; echo '<br>';
// Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir
//  suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.

echo '2.------------------------------ ';

echo '<br>';

$sk = 0;
$skaitliukas = 0;
for ($i=1; $i<=300; $i++){
    $sk = rand(0, 300);
    if ($sk > 275){
      $sk = '<span style="Color:red">'.$sk.'</span>';
    }
   echo $sk . ' ';
   if ($sk > 150){
       $skaitliukas++;
   }
}
echo '<br>';
echo 'Didesniu nei 150 skaiciu yra: '.$skaitliukas;

echo '<br>'; echo '<br>'; echo '<br>';

// Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki 3000, kurie dalijasi iš 77 be liekanos.
//  Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti.
//   Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.

echo '3.------------------------------- ';
echo '<br>';
for ($i=1; $i<=3000; $i++){
    if ($i%77 == 0) {
        if($i == 77){
            echo $i;
            continue;
        }
        echo ', '.$i;
    }
}
echo '<br>'; echo '<br>'; echo '<br>';


echo '4.------------------------------ ';
// Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. 
// Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.

for ($i=1; $i <= 100; $i++) { 
    echo '<br>';
    for ($j=1; $j <= 100; $j++){
        if ($i == $j || $i+$j == 101) {
        echo '<span style="margin: 0px 1.5px 0px 1.5px; font-size: 10px; Color:red">*</span>';
        continue;
            }
    echo '<span style="margin: 0px 1.5px 0px 1.5px; font-size: 10px;">*</span>';
    }
}
echo '<br>'; echo '<br>'; echo '<br>';


echo '5.----------------------------- ';
echo '<br>';
echo 'Padaryta 4 užduotyje';
//Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
//Padaryta 4. uzduotyje.
echo '<br>'; echo '<br>'; echo '<br>';


echo '6.---------------------------- ';
// Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija,
//  kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame
//  į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas.
//  Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
// Iškritus herbui;
// Tris kartus iškritus herbui;
// Tris kartus iš eilės iškritus herbui;
echo '<br>';
// ---------------------
$coin = 0;
$coin = rand(0, 1);
if ($coin == 0) {
echo 'H';
}
else {
    echo 'S' ;
}
// --------------------------
echo '<br>';
$coin = 1;
while ($coin == 1) {
$coin = rand(0, 1);
echo '1';
}
echo '---H';
// ---------------------------
echo '<br>';
$coin = 0;
$counter = 0;
while ($counter < 3) {
$coin = rand(0, 1);
echo $coin;
if ($coin == 0){
$counter++;
}
}
echo '---Iskrito 3 herbai H.';
echo '<br>';
// -------------------------------------
echo '<br>';

$coin = 0;
$counter = 0;
while ($counter < 3) {
$coin = rand(0, 1);
echo $coin;
if ($coin == 0) {
    $counter++;
}
else {
    $counter = 0;
}
}
echo '--- Trys H is eiles!!!';

echo '<br>';



echo '<br>'; echo '<br>'; echo '<br>';


echo '7.---------------------------- ';
echo '<br>';
// Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20,
// Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų
// vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. 
// Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus.
// Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų.
$kazyssuma = 0;
$petrassuma = 0;
while ($kazyssuma <= 222 || $petrassuma <= 222){
$kazys = rand(5, 25);
$petras = rand(10, 20);
// echo "Kazys: $kazys Petras: $petras";
$kazyssuma += $kazys;
$petrassuma += $petras;
}

echo "Kazys: $kazyssuma Petras: $petrassuma";
echo '<br>';

if ($kazyssuma > $petrassuma) {
    echo 'Laimejo Kazys';
}
elseif ($kazyssuma == $petrassuma) {
    echo 'Niekas nelaimejo';
}
else {
    echo 'Laimejo Petras';
}
echo '<br>'; echo '<br>'; echo '<br>';


echo '8.----------------------------- ';
// Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą, 
// kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų 
// atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).
echo '<br>';
function printDiamond($n) 
{ 
    $space = $n - 1; 

    for ($i = 0; $i < $n; $i++) 
    { 
          
        for ($j = 0;$j < $space; $j++) {
            echo "&nbsp&nbsp";
        }
        for ($j = 0;$j <= $i; $j++) {
            $color = str_pad(sprintf("%x%x%x", rand(0,255), rand(0,255), rand(0,255)),6,rand(0,9));
            echo '<span style="Color:'.$color.'">'.'*&nbsp&nbsp'.'</span>';
        }
        echo '<br>';
        $space--; 
    } 
  
    $space = 0; 

    for ($i = $n; $i > 0; $i--) 
    { 
          
        for ($j = 0; $j < $space; $j++) {
            // printf(" "); 
            echo "&nbsp&nbsp";
    }
        for ($j = 0;$j < $i;$j++) { 
            $color = str_pad(sprintf("%x%x%x", rand(0,255), rand(0,255), rand(0,255)),6,rand(0,9));
            echo '<span style="Color:'.$color.'">'.'*&nbsp&nbsp'.'</span>';
        } 
        echo '<br>';
        $space++; 
    } 
} 
  printDiamond(10);



echo '<br>'; echo '<br>'; echo '<br>';


echo '9.----------------------------- ';
// Panaudokite funkciją microtime(). Paskaičiuokite kiek sekundžių užtruks kodą:
// $c = "10 bezdzioniu suvalge 20 bananu.";
// Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą: 
// $c = '10 bezdzioniu suvalge 20 bananu.';
// (Stringas viengubose ir dvigubose kabutėse)


echo'<br>';
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$time_start = microtime_float();
$i = 0;
while($i < 1000000){
$c = "10 bezdzioniu suvalge 20 bananu.";
$i++;
}
$time_end = microtime_float();
echo 'su dvigubom kabutem("") uztruko: '. ($time_end - $time_start);
//========================================================================
echo'<br>';
// function microtime_float1()
// {
//     list($usec, $sec) = explode(" ", microtime());
//     return ((float)$usec + (float)$sec);
// }
$time_start = microtime_float();
$i = 0;
while($i < 1000000){
$c = '10 bezdzioniu suvalge 20 bananu.';
$i++;
}
$time_end = microtime_float();
echo 'su viengubom kabutem(\'\') uztruko: '. ($time_end - $time_start);
//========================================================================
echo '<br>'; echo '<br>'; echo '<br>';


echo '10.------------------------------- ';
// Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija.
//  Vinies ilgis 8.5cm (pilnai sulenda į lentą).
// “Įkalkite” 5 vinis mažais smūgiais.
//  Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
// “Įkalkite” 5 vinis dideliais smūgiais.
//  Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti),
//  kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
echo '<br>';
$gylis = rand(5, 85);
$smugiuKiekis = 0;
$sukalimoGylis = 0;
$kiekis = 0;
echo '<br>';
do{
    if($sukalimoGylis < $gylis){
        $smugis = rand(5,20);
        $sukalimoGylis += $smugis;
        $smugiuKiekis++;
    }
    elseif($sukalimoGylis >= $gylis){
        echo '<br> Sukalti viniai '.$gylis.'mm i siena prireike ' .$smugiuKiekis. ' smugių.';
        $sukalimoGylis = 0;
        $smugiuKiekis = 0;
        $kiekis++;
        }
}while($kiekis < 5);

echo '<br>';
$gylis = rand(5, 85);
$smugiuKiekis = 0;
$sukalimoGylis = 0;
$kiekis = 0;
$pataike = 0;
$nepataike = 0;
echo '<br>';
do{
    $pataike = rand(0, 1);
    if ($pataike > 0){
    if($sukalimoGylis < $gylis){
        $smugis = rand(20,30);
        $sukalimoGylis += $smugis;
        $smugiuKiekis++;
    }
    elseif($sukalimoGylis >= $gylis){
        echo '<br> Sukalti viniai '.$gylis.'mm i siena prireike ' .$smugiuKiekis. ' smugių. Nepataike: '.$nepataike;
        $sukalimoGylis = 0;
        $smugiuKiekis = 0;
        $kiekis++;
        }
    }
    else {
        $smugiuKiekis++;
        $nepataike++;
    }
}while($kiekis < 5);
