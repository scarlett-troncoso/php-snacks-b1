<?php 

## Snack 2
    /*
    Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

var_dump($_GET);

// checks: name sia settato e sia piú lungo di 3 caratteri
var_dump(isset($_GET['name']) && strlen($_GET['name']) > 3); // true se é riempito con piu di 3 characters e false se é vuoto oppure riempito con meno di 3 chracters
// "var_dump(isset($_GET['name']) " ci ritorna un valore booleano false se il campo é vuoto, true se é riempito. Sempre se é settado, cioé se cé il attributto name nell form di html
// "&& strlen($_GET['name']) > 3)" controlla che il text inserito sia maggiore di 3 chacarters, e ci ritorna false se non é cosi, (PERÓ: questo valore booleano true o false lo sta facendo "isset" no "strlen")

//controllera che la email ci sia e anche che sia settata e contenga una "@" e un "."
var_dump(isset($_GET['email']), $_GET['email'], str_contains($_GET['email'], '@'), str_contains($_GET['email'], '.'));
// "isset($_GET['email']), " controllera che la email ci sia e anche che sia settata e ci ritorna valore booleano
// "$_GET['email'], " ci ritorna il valore inserito in "email"
// "str_contains($_GET['email'], '@'), " controlla che ci sia una "@" e ci ritorna valore booleano
// "str_contains($_GET['email'], '.'), " controlla che ci sia una "." e ci ritorna valore booleano

var_dump(isset($_GET['age']), $_GET['age'], is_numeric($_GET['age']));
// "is_numeric($_GET['age'])" controlla che il campo inserito sia un numero e ci ritorna true, altrimente false


$canAccess;
/* potevamo fare cosi ↓↓↓
if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])) { // se questi tre campi sono settati allora si prosegue altrimente error
*/
if (empty($_GET['name']) || empty($_GET['email']) || empty($_GET['age'])) { // se uno di questi tre campi sono vuoti allora si da un error
    echo 'ERROR';
}elseif (strlen($_GET['name']) <= 3){ // se name é inferiore o = a 3 caratteri
    echo 'cannot access'; // allora
}elseif (!str_contains($_GET['email'], '@') || !str_contains($_GET['email'], '.')) { // se email non ce una @ o un " . "
    echo 'cannot access'; // allora
}elseif (!is_numeric($_GET['age'])) { // se age non é un numero
    echo 'cannot access'; // allora
}else{
    echo'Accesso riuscito'; // altrimente 
};

?>

<!doctype html>
<html lang="en">
    <head>
        <title>02 fundamentals live less50</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <!--/* HTML/PHP */-->
            <p><?php echo $my_other_variable ?></p> <!--Long form-->
            <p><?= $myVariable ?></p> <!--Short form-->

            <?php ?>

            <!-- Forms -->
            <?php if (!empty($_GET) && in_array('name', $_GET)) : ?> 
            <!--"""  if (!empty($_GET) """ Soltanto se non 'e vuoto l'array $_GET, allora fare vedere il saluto con il nome -->
            <!--"""  && in_array('name', $_GET)) """ E vedi che nell array $_GET ci sia la chiave $name, se la chiave name non me la passi non ti faccia vedere ciao name, 
            se il value di name in input fosse un'altra cosa e non name ad es. (<input type="text" name="job" id="name" required> ) 
            allora non ci fa vedere ciao name -->

                <p>
                Ciao 
                    <?php echo $_GET['name'] . ' ' . $_GET['lastname']?>

                </p>

            <?php endif; ?>

            <div class="container">
                <form action="" method="get"> 
                    <div class="mb-3">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" id="name" class="form-control"> 
                    </div>

                    <div class="mb-3">
                        <label for="email">Your Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                        <!-- Obviamente per controllare che sia in formato di e-mail, quindi che abbia una @ e un ".qualcosa" potevamo semplecimente mettere il type="email" invece che type text, ma in questo caso vogliamo fare tutto tramite php per imparare, lo stesso col input di "age" e type number -->
                    </div>

                    <div class="mb-3">
                    <label for="age">Password</label>
                    <input type="text" name="age" id="age" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Send
                    </button>
                </form>
            </div>
        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
      
    </body>
</html>