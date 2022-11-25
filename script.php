<?php 

/**
 * 
 */

$badWord = "mannaggia";
$paragrafo = $_GET['paragrafo'];
$censura = str_replace($badWord, '***', $paragrafo);

$printParagraph = "Nel paragrafo c'è scritto: $censura <br> Ed è lungo:" . strlen($censura) ."caratteri!";

$printCensura = $printParagraph;

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
                <?php echo $printCensura; ?>
            </p>
        </div>
</body>
</html>