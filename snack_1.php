<?php
/*
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 
*/

$partite = [
    [
        "squadra_casa" => "Milano",
        "squadra_hospite" => "Cantu",
        "punti_casa" => "55",
        "punti_hospite" => "60",
    ],
    [
        "squadra_casa" => "Roma",
        "squadra_hospite" => "Calabria",
        "punti_casa" => "20",
        "punti_hospite" => "58",
    ],
    [
        "squadra_casa" => "Salerno",
        "squadra_hospite" => "Abruzzo",
        "punti_casa" => "46",
        "punti_hospite" => "35",
    ],
];

echo "SNACK 1   ---   STAMPATO CON PHP";
foreach ($partite as $partita) {
    /*
    echo "<pre>";
    var_dump($partita);
    echo "</pre>";
    */
    echo "<pre>";
    echo $partita['squadra_casa'] . " - " . $partita['squadra_hospite'] . " | " . $partita['punti_casa'] . " - " . $partita['punti_hospite'];
    echo "</pre>";
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

    <title>PHP snack_1 es les49</title>
</head>

<body>
    <h2>SNACK 1 --- STAMPATO CON PHP IN HTML</h2>

    <?php foreach ($partite as $partita) { ?>
        <p>
            <span> <?php echo $partita['squadra_casa'] ?> </span> -
            <span> <?php echo $partita['squadra_hospite'] ?> </span> |
            <span> <?php echo $partita['punti_casa'] ?></span> -
            <span> <?php echo $partita['punti_hospite'] ?></span>
        </p>
    <?php } ?>
</body>

</html>