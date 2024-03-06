<?php 
/*
Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/

$paragraph = "Andy Warhol ( Pittsburgh , 6 agosto 1928 – New York , 22 febbraio 1987) è stato un artista e attore americano che ha avuto un ruolo cruciale nella nascita e nello sviluppo della pop art. Dopo una carriera di successo come illustratore professionista , Warhol ottenne fama mondiale per il suo lavoro nella pittura , nel cinema d' avanguardia e nella letteratura , una notorietà supportata da un abile rapporto con i media e dal suo ruolo di guru della modernità. Warhol fungeva da collegamento tra artisti e intellettuali, ma anche tra aristocratici, omosessuali, celebrità di Hollywood , modelle, bohémien e pittoreschi personaggi urbani.";

$explodedParagraph = explode('.', $paragraph);

echo "STAMPATO PHP";
var_dump($explodedParagraph)

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

    <title>PHP snack_5 es les49</title>
</head>

<body>
    <div class="container">
        <h1>Stampato html</h1>
        <?php foreach ($explodedParagraph as $onlyParagraph) : ?>
            <p><?php echo $onlyParagraph ?></p> <!-- Cosí sarebbe stampare in pagina come al solito -->
            <p>-------------------------------</p>
            <p><?= $onlyParagraph ?></p> <!-- Questa é una scorciatoia per stampare in pagina -->
        <?php endforeach; ?>
    </div>
</body>

</html>