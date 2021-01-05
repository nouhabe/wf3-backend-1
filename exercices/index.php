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

    $m = 9;
        if ($m === 1) {
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

<h2>les tableaux</h2>
<?php
$car[0] ="dacia";
$car[1] ="BMW";
$car[2] ="Toyota";

$cars=["Dacia,BMW,Toyota"] ; //similaire aus 3 lignes précédentes
$cars= array ("Dacia","BMW","Toyota","mescedes");

echo "<p>".$car[0]." et ".$car[1]." et ".$car[2]."</p>";
echo "<p>".count($cars)."</p>";

//parcours de Tableau
$taille=count($cars);

echo'<ol type="A" reversed>';
for ($i=0;$i<$taille;$i++){
    echo "<li>".$cars[$i]."</li>";
}
echo"</ol>";

?>
<h4>ma recette de gateau</h4>
<ul>
    <h3>les ingrédients :</h3>
    <li>100g de farine</li>
    <li>50g de sucre</li>
    <li>4 ouefs</li>
    <li>100 ml lait</li>

</ul>
<ol>
    <h3>les ingrédients :</h3>
    <li>100g de farine</li>
    <li>50g de sucre</li>
    <li>4 ouefs</li>
    <li>100 ml lait</li>


</ol>

<h2>les tableaux associatifs</h2>

<?php
$age["Zakaria"]="27";
$age["Fatima"]="37";
$age["Rida"]="43";
echo "<p>".$age["Zakaria"]."</P>";

$age= array("Zakaria"=>"27","Fatima"=>"37","Rida"=>"43");
echo "<ul>";
foreach($age as $name=>$value){
    echo "<li>".$name." a ".$value." printemps !"."</li>";
    if($value<=10)
        echo"<p class='couleur'>"."c'est un enfant !"."</P>";
    elseif($value>10 && $value<18)
        echo"<p class='couleur'>"."c'est un ado !"."</P>";
    elseif($value>=30 && $value<40)
        echo"<p class='couleur'>"."Alors, on a la trentaine ? !"."</P>";  
    elseif( $value>40)
        echo"<p class='couleur'>"."Tu t'appelle pas Rida?"."</P>"; 
    elseif($value>=20 && $value<30)
        echo"<p class='couleur'>"."La vingtaine !"."</P>";         
}

echo "</ul>";

foreach($age as $name=>$value) {
    echo "<li>".$name." a ".$value." printemps !"."</li>";
    switch ($value) {
        case $value <= 10: echo "<p> Enfant ! </p>"; 
            break;
        case $value > 10 &&  $value <18 : echo "<p> Ado ! </p>"; 
            break; 
        case ($value >= 30 && $value < 40): echo "<p>Alors, on a la trentaine ?</p>"; 
            break; 
        case ($value == 43): echo "<p>Tu t'apellerais pas Rida, par hasard ?</p>"; 
            break;
        case ($value < 30 && $value >= 20): echo "<p>La vingtaine !</p>"; 
            break;
    }
}

$age= array("Zakaria"=>"27","Fatima"=>"37","Rida"=>"43");
    echo"<p>".print_r(array_keys($age))."</p>" ;
    echo"<p>".print_r(array_values($age))."</p>";
    echo"<p>".print_r($age)."</p>";


?>
<h3>fonctions des tableaux associatifs</h3>
<?php
$cars= array ("Dacia","BMW","Toyota",);//création tableau
sort($cars);//tri dans l'ordre alphabétique(tableau chaine de caractère)
echo"<p>".print_r($cars)."</p>";//affichage

$numbers= array ("4","6","2","22","11");
sort($numbers);//tri dans l'ordre croissant(tableau de nombre)
echo"<p>".print_r($numbers)."</p>";

rsort($numbers);//tri dans l'ordre décroissant(tableau de nombre)
echo"<p>".print_r($numbers)."</p>";

$os=array("Mac","NT","Irix","Linux");
    if (in_array("Irix",$os)){
        echo "<p>j'ai Irix</p>";
}
    if (in_array("Mac",$os)){
        echo "<p>j'ai Mac</p>";}


$array1=array("color"=>"red",2,4,"size"=>"tall","yes",7);
    echo"<p>".print_r($array1)."</p>";
    echo"<p>".print_r(array_keys($array1))."</p>" ;
$array2=array("a","b","color"=>"green","shape"=>"trapezold",4);
$result=array_merge($array1,$array2);
    sort($result);
        echo"<p>".print_r($result)."</p>";


?>






<h2>TP2: les tableaux</h2>
<h3>les tableaux:1</h3>
<?php
$months=["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];
$taille=count($months);

echo'<ol>';
for ($i=0;$i<$taille;$i++){
    echo "<li>".$months[$i]."</li>";
}
echo"</ol>";


echo "<ol>";
    $x = 0;
    while ($x < $taille) {
        echo "<li>".$months[$x]."</li>";
        $x++;
    }
    echo "</ol>";

    echo "<ol>";
    $x = 0;
    do {
        echo "<li>".$months[$x]."</li>";
        $x++;
    } while ($x < $taille);
    echo "</ol>";
    ?>
<h3>les tableaux:2</h3>
<?php
$pays= array( "France"=>"paris","Norvège"=>"Oslo","Sénégal"=>"Dakar","Inde"=>"New delhi","Chine"=>"Pékin","Mexique"=>"Mexico",);
foreach($pays as $capital){
    echo"<p>". $capital."</p>";
}
?>
<h3>les tableaux:3</h3>
<?php
$X=array('A','B','C','D');
$Y=array('E','F','G','H');
$X = array_merge($X, $Y);




    echo"<ul>";
    foreach($X as $donnée){
        echo"<li>". $donnée."</li>";
    }
    echo"</ul>";

?>
<h2>les fonctions</h2>
<?php



function writeMsg($firstname ,$name , $repetition ){
    for($i=0;$i<$repetition;$i++){
        paragraph("hello ".$firstname." ".$name."!");
        // echo "hello ".$firstname." ".$name."!";
    }
    
}

writeMsg("sayah","alyatim","2");//appel de fonction

function paragraph($chaine ){
    echo"<p>".$chaine."</p>";
}

paragraph("poulet");




?>
</body>

</html>