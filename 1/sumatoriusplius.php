<!-- 
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


?> -->
<form action="" method = "POST">
<h1>Apklausa</h1>
<div style="display:flex;">
<img src = "img/elnias.jpg" style="width:300px;height:auto;display:inline-block;margin:30px;">
<div style="display:flex; flex-direction:column;margin:30px;">
<p>Koks tai gyvunas?</p>
<label><input type="radio" value="Elnias" name="a">Elnias</label>
<label><input type="radio" value="suo" name="a">suo</label>
<label><input type="radio" value="katinas" name="a">katinas</label>
<label><input type="radio" value="begemotas" name="a">begemotas</label>
<button type="submit">Speti!</button>
</div>
</div>  
</form>

<?php
$atsakymas = 'Elnias';
print_r ($_POST);
if(!empty($_POST)) {
        if($_POST["a"] == $atsakymas) {
            echo '<h1 style="Color:green">Jūsų atsakymas teisingas, tai yra Elnias</h1>';
        }
else{
echo '<h1 style="Color:red">Jūsų atsakymas neteisingas</h1>';
}
}
else {
    echo 'postas tuscias';
}
