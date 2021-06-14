
<!-- 1. Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) 
į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu 
ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. 
Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju 
fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo 
kintamojo, vėl pasidarytų juodas. -->

<?php
_d($_SERVER['REQUEST_METHOD']);

$color = "black";
if (isset($_GET['color'])) {
    $color = "red";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juoda</title>
</head>
<body style="background-color: <?=$color?>; margin: 40px;">
    <h1 style= "margin-left: 20px; color: white">Juoda</h1>
    <h2 style>
    <a style= "margin: 20px;" href="./ndWEB1.php">Juoda</a>
    <a style= "margin: 20px;" href="./ndWEB1.php?color=1">Raudona</a>
    </h2>

</body>
</html>

