<?php
session_start();
echo '5.----------------------------------';
echo '<br>';
// <!-- Padaršykite skriptą, kuris generuotų puslapį su 3 mygtukais, išdėliotais vienoje eilėje. 
// Paspaudus mygtuką, būtų išvedamas atsitiktinis skaičius analogiškai kaip pagal 2 uždavinio sąlygą. 
// Padarykite taip, kad paspaudus mygtuką, prieš tai buvę sugeneruoti skaičiai (jeigu buvo) neišnyktų. -->
// http://localhost/Darbai/duomenys/DataIO5.php

?>
<form action="" method="POST">
    <button type="submit" name="x" value="1">nuo 1 iki 50</button>
    <button type="submit" name="y" value="2">nuo 51 iki 100</button>
    <button type="submit" name="z" value="3">nuo 101 iki 150</button>
    <button type="submit" name="a" value="4">RESETAS</button>
</form>

<?php
if (!empty($_POST)) {

    // _dc($_POST);

    if (isset($_POST['x'])) {
        $skaicius = rand(1, 50);
        $_SESSION['skaicius'] .= 'Skaicius: ' . $skaicius . '<br>';
        echo ($_SESSION['skaicius']) . '<br>';
    } elseif (isset($_POST['y'])) {
        $skaicius = rand(51, 100);
        $_SESSION['skaicius'] .= 'Skaicius: ' . $skaicius . '<br>';
        echo ($_SESSION['skaicius']) . '<br>';
    } elseif (isset($_POST['z'])) {
        $skaicius = rand(101, 150);
        $_SESSION['skaicius'] .= 'Skaicius: ' . $skaicius . '<br>';
        echo ($_SESSION['skaicius']) . '<br>';
    } elseif (isset($_POST['a'])) {
        session_unset();
    }
    // $_SESSION['skaicius'] .= 'Skaicius: ' . $skaicius . '<br>';
    // echo ($_SESSION['skaicius']) . '<br>';




    // _dc($_SESSION['skaicius']);


    // foreach ($_SESSION['skaicius'] as $key => $val) {
    // //     $_SESSION[$key] = $skaicius;

    // }

    // _dc($_SESSION['skaicius']);

    //     echo $skaicius;
    //     if(isset($_SESSION['skaicius'])) {
    //     foreach ($_SESSION['skaicius'] as $val) {
    //         echo ($key + 1) . '. : ' . $val . '<br>';
    //     }
    // }


}
// session_unset();
