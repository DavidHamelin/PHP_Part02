<?php
echo "<h1>PHP Partie 02 : Les Conditions </h1>";

// Ex 01
$age = 18 ;
if ($age < 18)
{
    echo "Vous avez $age ans : vous êtes mineur !";
}
elseif ($age >= 18)
{
    echo "Vous avez $age ans  : vous êtes majeur !";
}
else 
{
    echo "Je ne connais pas votre age...";
}

// Ex 02
$isEasy = true;
if ($isEasy == true) echo "<h4> C'est facile!! </h4>";
else echo "<h4> C'est difficile !!! </h4>";
// Autre façon de faire : 
$isEasy = false;
if ($isEasy == true)
{
?>
<h4> C'est facile!! </h4>
<?php 
}

else
{
?>
  <h4> C'est difficile !!! </h4>
<?php  
}

// Ex 03
$age = 10;
$gender = 'homme';

if ($gender == 'homme' && $age < 18)
{
    echo "Vous êtes un $gender et vous êtes mineur";
}
elseif ($gender == 'homme' && $age >= 18)
{
    echo "Vous êtes un $gender et vous êtes majeur";
}
elseif ($gender == 'femme' && $age < 18)
{
    echo "Vous êtes une $gender et vous êtes mineur";
}
elseif ($gender == 'femme' && $age >= 18)
{
    echo "Vous êtes une $gender et vous êtes majeur";
}

// Ex 04
echo "<h3> Echelle de Richter </h3>";
$magnitude = 6;
switch ($magnitude)
{
    case 1 :
        echo "$magnitude : Micro-séisme impossible à ressentir.";
    break;

    case 2 :
        echo "$magnitude : Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
    break;

    case 3 :
        echo "$magnitude : Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
    break;

    case 4 :
        echo "$magnitude : Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
    break;

    case 5 :
        echo "$magnitude : Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction.
        Peu de dégats sur des bâtiments modernes.";
    break;

    case 6 :
        echo "$magnitude : Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
    break;

    case 7 :
        echo "$magnitude : Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
    break;

    case 8 :
        echo "$magnitude : Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
    break;

    case 9 :
        echo "$magnitude : Séisme capable de tout détruire sur une très vaste zone.";
    break;
}
// Ex 05
echo "<h3>Traduction d'une ternaire 1 : </h3>";
// echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
if ($gender != 'homme')
{
    echo 'C\'est une développeuse !!!';
}
else
{
    echo 'C\'est un développeur !!!';
}
// Ex 06
echo "<h3>Traduction d'une ternaire 2 : </h3>";
// echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
if ($age >= 18)
{
    echo 'Tu es majeur';
}
else
{
    echo 'Tu n\'es pas majeur';
}
// Ex 07
echo "<h3>Traduction d'une ternaire 3 : </h3>";
$isOk = false;
// echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
if ($isOk == false)
{
    echo 'c\'est pas bon !!!';
}
else
{
    echo 'c\'est ok !!';
}
// Ex 08
echo "<h3>Traduction d'une ternaire 4 : </h3>";
// echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
if ($isOk)
{
    echo 'c\'est ok !!';
}
else
{
    echo 'c\'est pas bon !!!';
}
?>
