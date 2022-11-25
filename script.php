/*
Creare un form PHP che permetta di inviare due campi:
    - Un paragrafo
    - Una parola da censurare.

Gestire il tutto con due file diversi.

Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server (con il form).

Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
    - Stampare a schermo il paragrafo e la sua lunghezza
    - Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

<?php 

$badWord = "Mannaggia";
$paragrafo = $_GET['paragrafo'];
$censura = str_replace($paragrafo, '***', $badWord);

$printParagraph = "Nel paragrafo c'è scritto: $censura <br> Ed è lungo:" . strlen($censura) ."caratteri!";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
<div class="print_words">
            <p class="words">
                <?php echo $censura; ?>
            </p>
        </div>
</body>
</html>