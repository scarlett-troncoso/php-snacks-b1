<?php 

/*
Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

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
    <div>
    <?php foreach($db as $category => $list) : ?>      <?php ?>

        <div class="<?php echo $category === 'teachers' ? 'bg-success' : 'bg-secondary' ?>">
            <?php foreach($list as $employee) : ?> 
                <h3><?php echo $employee['name'] ?> <?php echo $employee['lastname'] ?></h3>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
    </div>
</body>

</html>