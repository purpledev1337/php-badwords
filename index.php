<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$x = 10;
$y = 20;
$z = $x + $y;
$originalString = "Lorem ipsum, dolor parolaccia sit amet consectetur adipisicing elit. Unde libero parolaccia earum voluptatum magnam similique sint obcaecati eum laudantium culpa parolaccia perspiciatis? Ducimus veritatis laudantium, quos a nisi esse et deleniti parolaccia reprehenderit.";
$censoredString = str_replace("parolaccia", "***", $originalString);
?>

<h1>Hello world</h1>

<h1><?php echo "La somma di ", $x, " + ", $y, " è uguale a: ", $z ?></h3>

<hr>

<h4>Stringa originale (lorem con parolacce) - Lunghezza paragrafo: <?php echo strlen($originalString)?></h6>
<p><?php echo $originalString ?></p>
<h4>Stringa censurata (censura: ***) - Lunghezza paragrafo: <?php echo strlen($censoredString)?></h6>
<p><?php echo $censoredString ?></p>

<hr>

<?php $newOriginalString = "Questo php è un altro testo boolean da censurare. Le parole boolean in più che vedete sono senza php significato e servono per lo scopo boolean dell'esercizio. Verranno censurate nella sezione succesiva a questo php paragrafo boolean. Potete scegliere quali parole censurare php nel form sottostante."?>

<p style="width: 50%; font-size: 2em"><?php echo $newOriginalString ?></p>
<h3>Lunghezza paragrafo: <?php echo strlen($newOriginalString)?></h3>
<form action="index.php" method="get">Parola da censurare:
    <input type="text" name="word">
    <input type="submit">
</form>
<h2>Nuova stringa censurata &#8628;</h2>
<span style="display:inline-block; width: 50%; font-size: 2em">
    <?php 
        $newCensoredString = str_replace($_GET["word"], "***", $newOriginalString);
        echo $newCensoredString
    ?>
</span>
<h3>Lunghezza paragrafo: <?php echo strlen($newCensoredString)?></h3>
<h3><?php echo "La parola che è stata censurata è: ", $_GET["word"] ?></h3>

</body>
</html>