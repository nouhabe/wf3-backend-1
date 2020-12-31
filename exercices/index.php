<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
</head>



<body>

    <h1>
        Exercice 1 de PHP :
        Exercice 1 de PHP :
        Syntaxe de base du langage
    </h1>


    <h2>Exemple a)</h2>

    <p><?php echo "Hello World!" ?></p>

    <h2>Exemple b)</h2>

    <?php
    // Définition de variable
    $texteDuParagraphe = "Hello World!";
    $entier = 7;
    $decimal = 10.5;
    $x = 12.5; // reconnait les premiers caractères comme étant un type decimal
    $y = 4;
    $z = $x + $decimal;

    // Définition de constante
    define("VITESSE_MAX", 300000);
    define("AGE_LIMITE", 14);

    // echo $texteDuParagraphe;
    // echo $entier;
    // echo $decimal;

    // echo $VITESSE_MAX; est une erreur car ce n'est PAS une VARIABLE mais une CONSTANTE
    // echo VITESSE_MAX;
    // echo " ";
    // echo constant("VITESSE_MAX");  
    ?>

    <p><?php echo $z ?></p>

    <h2>Exemple c)</h2>

    <?php
    // Incrémentation (ajoute 1)
    $z++;
    $z = $z + 1; // Exactement le même résultat que la ligne précédente
    $z += 1; // Exactement le même résultat que la ligne précédente

    // Décrémentation (retire 1)
    $z--;
    $z = $z - 1; // Exactement le même résultat que la ligne précédente
    $z -= 1; // Exactement le même résultat que la ligne précédente

    // Exemple supplémentaire
    $z = $entier + $entier - $decimal;
    ?>

    <p><?php echo $z ?></p>

    <h2>Exemple d)</h2>
    <!-- Mise en place d'une liste -->
    <ul>
        <li><?php echo $texteDuParagraphe; ?></li>
        <li><?php echo $entier; ?></li>
        <li><?php echo $decimal; ?></li>
        <li><?php echo $x; ?></li>
        <li><?php echo $y; ?></li>
        <li><?php echo $z; ?></li>
    </ul>
    <h2>exemple i&nbsp; : les conditions</h2>

    <?php
    echo "<p>";
    $x = 3;
    if ($x >= 10) {
        echo "bonjour&nbsp; !";
    } elseif ($x < 5) {
        echo "salut&nbsp;!";
    } else {
        echo "rien à faire.";
    }
    echo "</p>";
    $favcolor = "red";
    echo "<p>";

    switch ($favcolor) {
        case "red":
            echo "votre couluer préférée est le rouge&nbsp;!";
            break;
        case "blue":
            echo "votre couluer préférée est le blue&nbsp;!";
            break;
        case "green":
            echo "votre couluer préférée est le vert&nbsp;!";
            break;
        case "yellow":
            echo "votre couluer préférée est le jaune&nbsp;!";
            break;
        default:
            echo "vous n'avez pas de couleur préférée&nbsp;!";
    }
    echo "<ul>";
    $x = 1;
    while ($x <= 5) {
        echo "<li>$x</li>";
        $x++;
    }
    echo "</ul>";

    echo "<ul>";
    $x = 1;
    do {
        echo "<li>$x</li>";
        $x++;
    } while ($x <= 5);
    echo "</ul>";


    echo "<ul>";

    for ($i = 0; $i <= 10; $i++) {
        echo "<li>$i</li>";
    }
    echo "</ul>";


    ?>
    <h2>TP 1</h2>
    <h4>exercice1</h4>
    <?php
    $x = 1;
    $y = 835;
    echo "<ul>";
    while ($x < $y) {
       
        $x++;
    }
    echo "<li>$x<li/>";
    echo "<li>$y</li>";
    echo "</ul>";

    $x = 1;
    $y = 835;
    echo "<ul>"; 
    do {
        $x++;
    } while ($x < $y);
    echo "<li>$x<li/>";
    echo "<li>$y</li>";
    echo "</ul>";


    ?>
    <h4>exercice2</h4>
    <?php
    echo "<ul>";

    for ($i = 7; $i < 1000; $i += 7) {
        echo "<li>$i</li>";
    }
    echo "</ul>";
    ?>
    <h4>exercice3</h4>
    <?php

    $m = 1;
        if ($m == 1) {
        echo "<p> $m est un nombre premier</p>";
    } 
        for ($j = 2; $j <= ($m / 2); $j++) {
        
   
            if ($m % $j == 0) {
            echo "<p>$m n'est pas un nombre premier</p>";
          break;
    } 
            
        else{
            echo "<p>$m est un nombre premier</p>";
        }
    }


    ?>


</body>

</html>