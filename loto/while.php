<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>While</title>
</head>
<body>
<h1>Boucle While</h1>
    <?php
       $tirage2 = array();
       $a= 1;

       while ($a <= 5) {
           $a++;
            if (in_array(rand(1, 49), $tirage2)) {
                array_push($tirage2,  rand(1, 49));
            } else{
                array_push($tirage2,  rand(1, 49));
            }
    
          }
          var_dump($tirage2);
    
       
    ?>
</body>
</html>