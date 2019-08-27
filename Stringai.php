<?php
echo '1. ';
$vardas = 'Robertas';
$pavarde = 'deNiro';
if (strlen ($vardas) > strlen ($pavarde)){
    echo $pavarde;
}
else {
    echo $vardas;
}
echo '<br>'; echo '<br>'; echo '<br>';


echo '2. ';
$vardas = 'Robertas';
$pavarde = 'deNiro';
echo strtoupper($vardas).' '.strtolower($pavarde);
echo '<br>'; echo '<br>'; echo '<br>';


echo '3. ';
$vardas = 'Robertas';
$pavarde = 'deNiro';
$praides = $vardas{0} . $pavarde{0};
echo $praides;
echo '<br>'; echo '<br>'; echo '<br>';


echo '4. ';
$vardas = 'Robertas';
$pavarde = 'deNiro';

$trecias = $vardas{(strlen($vardas))-3} . $vardas{(strlen($vardas))-2} . $vardas{strlen($vardas)-1} . $pavarde{(strlen($pavarde))-3} . $pavarde{(strlen($pavarde))-2} . $pavarde{strlen($pavarde)-1};

echo $trecias;
echo '<br>'; echo '<br>'; echo '<br>';


echo '5. ';
$kintamasis = 'An American in Paris';
$zvaigzdes = str_replace('A', '*', $kintamasis);
$zvaigzdesminus = str_replace('a', '*', $zvaigzdes);
echo $zvaigzdesminus;
echo '<br>'; echo '<br>'; echo '<br>';


echo '6. ';
$kintamasis = 'An American in Paris';
echo '"a" ir "A" raidziu siame tekste yra: '.(substr_count($kintamasis, "A") + substr_count($kintamasis, "a"));

echo '<br>'; echo '<br>'; echo '<br>';


echo '7. ';
$string1 = 'An American in Paris';
$string2 = 'Breakfast at Tiffany\'s';
$string3 = '2001: A Space Odyssey';
$string4 = 'It\'s a Wonderful Life';
echo $string1;
echo '<br>';
echo str_ireplace(array('a','e','i','o','u'), '', $string1);
echo '<br>';
echo $string2;
echo '<br>';
echo str_ireplace(array('a','e','i','o','u',' '), '', $string2);
echo '<br>';
echo $string3;
echo '<br>';
echo str_ireplace(array('a','e','i','o','u',' '), '', $string3);
echo '<br>';
echo $string4;
echo '<br>';
echo str_ireplace(array('a','e','i','o','u',' '), '', $string4);
echo '<br>'; echo '<br>'; echo '<br>';


echo '8. ';
$string = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $string;
echo '<br>';
echo 'Epizodo numeris: '.intval(preg_replace('/[^0-9.]/','',$string));
echo '<br>'; echo '<br>'; echo '<br>';


echo '9. ';
$stringas1 = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$stringas2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
echo $stringas1;
echo '<br>';
echo $stringas2;