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
        echo '<img src="../img/1.jpg" style="width:300px;height:auto;display:inline-block;margin:30px";>';
        break;
    case 'b':
    echo '<img src="../img/2.jpg" style="width:300px;height:auto;display:inline-block;margin:30px";>';
        break;
    case 'c':
    echo '<img src="../img/3.jpg" style="width:300px;height:auto;display:inline-block;margin:30px";>';
        break;
}