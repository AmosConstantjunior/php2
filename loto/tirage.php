<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Loto</h1>
    <?php
$loto = array();
for ($f = 0; $f < 5; $f++) {
    array_push($loto, rand(1, 49));
}
var_dump($loto);

?>
    <h1>Jeu boucle for</h1>
    <?php
$tirage = array();
for ($v = 0; $v < 5; $v++) {
    if (in_array(rand(1, 49), $tirage)) {

    } else {
        array_push($tirage, rand(1, 49));
    }

}
var_dump($tirage);

?>
    <h1>Boucle While</h1>
    <?php
$tirage2 = array();
$a = 1;

while ($a <= 5) {
    $a++;
    if (in_array(rand(1, 49), $tirage2)) {
        array_push($tirage2, rand(1, 49));
    } else {
        array_push($tirage2, rand(1, 49));
    }

}
var_dump($tirage2);

?>

    <h1>Fonction tirage 10 avec statistique </h1>

    <?php

function tirage()
{
    $tirage10 = array();
    $nombre = 1;

    while ($nombre <= 10) {
        $nombre++;
        if (in_array(rand(1, 49), $tirage10)) {
            array_push($tirage10, rand(1, 49));

            echo 'deja';

        } else {
            array_push($tirage10, rand(1, 49));
        }

    }
    var_dump($tirage10);
}
tirage();
?>
  

</body>
</html>