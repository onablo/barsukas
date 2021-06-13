<!--3.	Perdarykite 2 uždavinį taip, kad spalvą 
būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku 
GET metodu formoje.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 uzduotis</title>
</head>
<body>
<h1 style="color: grey;">Paduoti spalva</h1>


<a style="background-color: white; color: black; padding: 15px; border-radius: 7px; display: inline-block" href="http://localhost/barsukas/10/ndWEB3.php">Juoda</a>


<form action="?color=" method="get">
<input style="background-color: white; color: red; padding: 15px; border-radius: 7px; display: inline-block" type="number" name="color"></input>
</form>


<?php
    if(!empty($_GET)) {
        echo "<body style='background-color: #" . $_GET['color'] . "'></body>";
    } else {
        echo '<body style="background-color:yellow"></body>';


    }
?>
    
</body>
</html>

</body>
</html>