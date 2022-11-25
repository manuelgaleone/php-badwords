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

$paragrafo = $_GET['paragrafo'];
$printParagraph = $paragrafo;

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
    <h1>
        <?php echo $paragrafo; ?>
    </h1>
</body>
</html>