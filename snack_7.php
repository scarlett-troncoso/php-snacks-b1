<?php 

/*
Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$students = [
    [
        "name" => "Gianluca",
        "lastname" => "Bagante",
        "votes" => [1, 2, 2, 3, 1, 3],
    ], 
    [
        "name" => "Sara",
        "lastname" => "Elsharkawy",
        "votes" => [1, 2, 2, 3, 1, 3],
    ], 
    [
        "name" => "Cristina",
        "lastname" => "Giacobbe",
        "votes" => [1, 2, 2, 3, 1, 3],
    ], 
    [
        "name" => "Ricardo",
        "lastname" => "Montalto",
        "votes" => [1, 2, 2, 3, 1, 3],
    ],
    [
        "name" => "Andrea",
        "lastname" => "Parrini",
        "votes" => [1, 2, 2, 3, 1, 3],
    ],
];

// Prove per sommare gli elemti di un array:
// var_dump(array_sum($students[2]["votes"])); // in pagina: ' int 12 ' La somma del array votes, del secondo array dentro $students 

// Calculare the average vote
// ar_dump(array_sum($students[2]["votes"]) / count($students[2]["votes"])); // in pagina: int '2' cosí otteniamo la media dei voti

foreach ($students as $student) {
    echo '<div>';
    echo $student['name'] . ' ' . $student['lastname'] . ' | votes average: ' . array_sum($student['votes']) / count($student["votes"]) ;
    echo '</div>';
};
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

    <title>PHP snack_6 es les49</title>
</head>

<body>
    <div>   <?php ?>

       
    </div>
</body>

</html>