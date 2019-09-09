<?php
session_start();
echo '2.----------------------------------';
echo '<br>';
// <!-- Parašykite skriptą, kuris generuotų puslapį su trim nuorodom (linkais). 
// Paspaudus ant pirmo linko puslapyje parodytų atsitiktinį skaičių nuo 1 iki 50,
//  paspaudus antrą- nuo 51 iki 100, trečią- nuo 101 iki 150. Naudokite tik vieną failą ir metodą GET. -->
// <!-- Analogiškai 1 uždaviniui parašykite skriptą puslapiui su trim mygtukais.
//  Naudokite metodą POST. -->

?>


<form action="" method="POST">
    <button type="submit" name="x" value="1">nuo 1 iki 50</button>
    <button type="submit" name="y" value="2">nuo 51 iki 100</button>
    <button type="submit" name="z" value="3">nuo 101 iki 150</button>

</form>

<?php
if (!empty($_POST)) {

    _dc($_POST);


    if (isset($_POST['x'])) {
        echo rand(1, 50);
    } elseif (isset($_POST['y'])) {
        echo rand(51, 100);
    } elseif (isset($_POST['z'])) {
        echo rand(101, 150);
    }
}



session_unset();
