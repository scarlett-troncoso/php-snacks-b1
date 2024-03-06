<?php

/*
Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$numeri = [ ];

while (count($numeri) < 15) { //fare che numeri continui a ciclare fino a essere menore di 15
    //generate a random number
    $randomNumber = rand(1, 50); // crea il numero random da 1 a 50
    //check if the generated number is not in_array $numeri
    if (!in_array($randomNumber, $numeri)) { //cercare $randomNumber in $numeri, '!' quindi, se NON ce nell array
        //$numeri[] = $randomNumber;
        array_push($numeri, $randomNumber);
        # code...
    }
     // -push it
};
var_dump($numeri);

//COSI SAREBBE CON CICLO FOR:
/*
for ($i=0; $i, count($numeri) < 15; $i++) { 
    $randomNumber = rand(1, 50);
    if (!in_array($randomNumber, $numeri)) { //cercare $randomNumber in $numeri, '!' quindi, se NON ce nell array
        //$numeri[] = $randomNumber;
        array_push($numeri, $randomNumber);
        # code...
    }
};

var_dump($numeri);*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />

    <title>PHP snack_4 es les49</title>
</head>

<body>
    
</body>

</html>