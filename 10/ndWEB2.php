<!--2.	Sukurti puslapį panašų į 1 uždavinį, 
tiktai antro linko su perduodamu kintamuoju 
nedarykite, o vietoj to padarykite, URL eilutėje 
ranka įvedus GET kintamąjį color su RGB spalvos 
kodu (pvz color=ff1234) puslapio fono spalva 
pasidarytų tokios spalvos. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 uzduotis</title>
</head>
<body>
    <h1 style="color: green; margin: 40px;" >Kita spalva</h1>
    <a style = "background-color: yellow; color: red; margin: 20px; padding: 15px; border-radius: 7px; "href="http://localhost/barsukas/10/ndWEB2.php" >Juoda</a>
    <a style = "background-color: yellow; color: green; margin: 20px; padding: 15px; border-radius: 7px;"href ="?color=">Kita spalva</a>
   
    <?php
    if (!empty($GET)) {
        echo "<body style = 'background-color: #ff1234" . $_GET['color'] . "'></body>";
    }
    else {
        echo "<body style = 'background-color: black'></body>";
    }

    ?>

</body>
</html


