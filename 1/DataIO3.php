<?php
echo '3.----------------------------------';
echo '<br>';
// <!-- Parašykite skriptą, kuris generuotų puslapį  su trim nuorodom (linkais).
//  Paspaudus ant kiekvieno linko turėtų būti rodomas vienas iš trijų skirtingų paveiksliukų.
//   Naudokite tik vieną failą ir metodą GET. -->
?>
<a href="?q=a">Pirmas</a><br>
<a href="?q=b">Antras</a><br>
<a href="?q=c">Trecias</a><br>

<?php
echo '<br>';echo '<br>';

$q = $_GET['q'] ?? 'kazkas negerai...';

switch ($q) {
    case 'a':
        echo rand(1, 50);
        break;
    case 'b':
    echo rand(51, 100);
        break;
    case 'c':
    echo rand(101, 150);
        break;
}