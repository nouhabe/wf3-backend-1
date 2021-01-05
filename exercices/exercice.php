<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php
$months=["janvier","fevrier","mars","avril","juin","juillet","aout","septembre","octobre","novembre","decembre"];
$taille=count($months);

echo'<ol>';
for ($i=0;$i<$taille;$i++){
    echo "<li>".$months[$i]."</li>";
}
echo"</ol>";


echo "<ol>";
    $x = 1;
    while ($x <= $taille) {
        echo "<li>$x</li>";
        $x++;
    }
    echo "</ol>";

    echo "<ol>";
    $x = 1;
    do {
        echo "<li>$x</li>";
        $x++;
    } while ($x <= $taille);
    echo "</ol>";





















</body>

</html>