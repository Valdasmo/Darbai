<?php
/* Naršyklėje nupieškite linija iš 400 “*”. 
Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; */

echo '1. ';
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

echo '2. ';

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

echo '3. ';
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


echo '4. ';
// Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. 
// Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.

for ($i=0; $i < 100; $i++) { 
    echo '<br>';
    for ($j=0; $j < 100; $j++){
    echo '<span style="margin: 0px 1.5px 0px 1.5px; font-size: 5px;">*</span>';
    }
}

