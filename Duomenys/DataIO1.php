<?php
echo '1.----------------------------------';
echo '<br>';
// <!-- Parašykite skriptą, kuris generuotų puslapį su trim nuorodom (linkais). 
// Paspaudus ant pirmo linko puslapyje parodytų atsitiktinį skaičių nuo 1 iki 50,
//  paspaudus antrą- nuo 51 iki 100, trečią- nuo 101 iki 150. Naudokite tik vieną failą ir metodą GET. -->
?>
<a href="?q=a">nuo 1 iki 50</a>
<a href="?q=b">nuo 51 iki 100</a>
<a href="?q=c">nuo 101 iki 150</a>

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
// _dc($_GET);


echo '<br>'; echo '<br>'; echo '<br>';











echo '<br>'; echo '<br>'; echo '<br>';
echo '4.----------------------------------';
echo '<br>';
// <!-- Parašykite skriptą, kuris generuotų puslapį  su tokia forma:
// Įvedimo laukeliai:
// Vardas
// Pavardė
// Asmens kodas
// Mygtukai:
// Ieškoti pagal vardą ir pavardę
// Iškoti pagal asmens kodą
// Paspaudus pirmą mygtuką turėtų būti parodomas pranešimas:
// Paieška pagal vardą ir pavardę ir išvedami vardas ir pavardė
// Paspaudus antrą mygtuką turėtų būti parodomas pranešimas:
// Paieška pagal asmens kodą ir išvedamas kodas
// Jeigu nors vienas laukelis, pagal kurį atliekama paieška yra tuščias, turėtų būti parodomas klaidos pranešimas. -->



echo '<br>'; echo '<br>'; echo '<br>';
echo '5.----------------------------------';
echo '<br>';
// <!-- Padaršykite skriptą, kuris generuotų puslapį su 3 mygtukais, išdėliotais vienoje eilėje. 
// Paspaudus mygtuką, būtų išvedamas atsitiktinis skaičius analogiškai kaip pagal 2 uždavinio sąlygą. 
// Padarykite taip, kad paspaudus mygtuką, prieš tai buvę sugeneruoti skaičiai (jeigu buvo) neišnyktų. -->



echo '<br>'; echo '<br>'; echo '<br>';
echo '6.----------------------------------';
echo '<br>';
// <!-- Papildykite 4 uždavinį taip, kad forma būtų galima pasiekti tik “prisijungus” t.y.
//  į atskirą formą suvedus prisijungimo “vardą” ir “slaptažodį”. Neprisijungusiems vartotojams 
//  turi būti rodoma prisijungimo formą. Padarykite linką, kurį paspaudus vartotojas galėtų atsijungti. -->



echo '<br>'; echo '<br>'; echo '<br>';
echo '7.----------------------------------';
echo '<br>';
// <!-- Papildykite 4 uždavinį įvedamos informacijos tikrinimu HTML elementuose pridedant patern atributą.
//  Vardas ir pavardė turi būti sudaryti tik iš raidžių, o asmens kodas 13 skaitmenų. -->



echo '<br>'; echo '<br>'; echo '<br>';
echo '8.----------------------------------';
echo '<br>';
// <!-- Parašykite skriptą, kuris generuotų puslapį  su tokia forma:
// Įvedimo laukeliai:
// Mašinos markė
// Valstybinis numeris
// Pagaminimo metai
// Suprogramuokite įvedamos informacijos tikrinimą serverio pusėje pagal taisykles:
// Mašinos markė leidžiami skaičiai ir raidės;
// Valstybinis numeris formatu ABC-123;
// Pagaminimo metai formatu 2013.
 
// Padarykite taip, kad įvedus informaciją netinkamu formatu laukelio rėmai
//  pakeistų spalvą į raudoną ir įvesta informacija iš laukelių neišnyktų ir
//   pasiliktų vartotojo suvesti duomenys. -->
