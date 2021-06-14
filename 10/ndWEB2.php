<!--2.	Sukurti puslapį panašų į 1 uždavinį, 
tiktai antro linko su perduodamu kintamuoju 
nedarykite, o vietoj to padarykite, URL eilutėje 
ranka įvedus GET kintamąjį color su RGB spalvos 
kodu (pvz color=ff1234) puslapio fono spalva 
pasidarytų tokios spalvos. -->

<?php


_d($_SERVER['REQUEST_METHOD']); 


if (isset($_GET['color'])) {
    $color = $_GET['color'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 uzduotis</title>
</head>

<body style="background-color: #<?=$color?>">
    <h1 style= "color:grey; margin-left:20px; color:grey">Juodas</h1>
    <h2> 
    <a style= "display: block; margin: 20px;" href="./ndWEB2.php">Juoda</a>
    <a style= "margin: 20px;" href="?color=">Kita spalva</a>
   
    </h2>

</body>
</html


