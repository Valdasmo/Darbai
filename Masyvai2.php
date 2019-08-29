<?php
echo '1.------------------------------ ';
echo '<br>';
// 1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai
//  iš 5 elementų su reikšmėmis nuo 5 iki 25.

$m3 = [];
foreach (range(0, 9) as $val) {
    $m3[$val] = [];
    foreach (range(0, 4) as $val1) {

        $m3[$val][$val1] = rand(5, 25);
    }


}
_d ($m3);
print_r ($m3);

echo '<br>'; echo '<br>'; echo '<br>';


echo '2--------------------------------- ';
echo '<br>';
// Naudodamiesi 1 uždavinio masyvu:

echo '<br>'; echo '<br>'; echo '<br>';


echo '2 c)------------------------------ ';
echo '<br>';
//3. c)
foreach (range(0, 4) as $val1){
$suma = 0;
foreach ($m3 as $val){
    $suma = $suma + $val[$val1];

}
echo $suma.'<br>';
}

//3. c) antras variantas
echo '<br>';

foreach(range(0,4) as $element){
    $suma = 0;
    foreach(range(0,9) as $level){
        $suma += $m3[$level][$element];
    }
    echo $suma.'<br>';
}
echo '<br>'; echo '<br>'; echo '<br>';

