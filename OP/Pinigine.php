<?php

class Pinigine{
   private $popieriniaiPinigai;
    private $metaliniaiPinigai;

public function ideti($kiekis)
    {
if ($kiekis > 2){
    $this->popieriniaiPinigai += $kiekis;
}
else{
    $this->metaliniaiPinigai += $kiekis;
}}
public function popieris(){
    return $this->popieriniaiPinigai;
}
public function metalas(){
    return $this->metaliniaiPinigai;
}

    
public function skaiciuoti(){
    return $this->popieriniaiPinigai +  $this->metaliniaiPinigai;
}
}
$p = new Pinigine;
$p->ideti(1);
echo 'Sumoje pinigų piniginėje = '.$p->skaiciuoti();
echo'<br>';
$p->ideti(2);
echo 'Sumoje pinigų piniginėje = '.$p->skaiciuoti();
echo'<br>';
$p->ideti(3);echo 'Sumoje pinigų piniginėje = '.$p->skaiciuoti();
echo'<br>';
$p->ideti(10);
echo 'Sumoje pinigų piniginėje = '.$p->skaiciuoti();
echo'<br>';
echo 'Popierinių pinigų = '.$p->popieris();
echo'<br>';
echo 'Metalinių pinigų = '.$p->metalas();



    