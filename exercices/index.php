<!DOCTYPE html>
<html>
<body>

<h1>Exercice 1 de PHP</h1>


<h2>Exemple a)</h2>

<?php
    echo "Hello World!"
?>

<h2>Exemple b)</h2>

<?php
    $texteDuParagraphe = "Hello World!";
    $entier = 7;
    $decimal = 10.5;
    $x = "12.5io1"; // reconnait les premiers caractères comme étant un type decimal
    $y = 4;
    $z = $x + $decimal;

    define("VITESSE_MAX", 300000);
    define("AGE_LIMITE", 14);

    // echo $texteDuParagraphe;
    // echo $entier;
    // echo $decimal;

    // echo $VITESSE_MAX; est une erreur car ce n'est PAS une VARIABLE mais une CONSTANTE
    echo VITESSE_MAX;
    echo " ";
    echo constant("VITESSE_MAX");
?>

<h2>Exemple c)</h2>

</body>
</html>