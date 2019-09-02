
<form action="" method = "POST">
X: 
<input type="text" name="x" >
<br>
Y: 
<input type="text" name="y" >
<br><br>
<input type="submit" value="Sumuoti">
</form>
<?php
if (!empty($_POST)){
$x = (float)$_POST['x'];
$y = (float)$_POST['y'];

echo 'Atsakymas: '. ($x + $y);
}
