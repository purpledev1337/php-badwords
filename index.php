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
<h1><?php echo "ciao ", $_GET["name"] ?></h1>

</body>
</html>