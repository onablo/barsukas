<!--3.	Perdarykite 2 uždavinį taip, kad spalvą 
būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje.    4fcaff, eeff3d-->
<?php

$color ="000000";
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
    <title>3 uzduotis</title>
    <style>
    body{
        background-color: #<?=$color?>;
    }
    a{
        display: block;
        color: white;
    }
    label{
        color: white;
    }
    .form-item{
        margin: 10px 30px;
    }
    </style>

</head>


<body>
    <form action="http://localhost/barsukas/10/ndWEB3.php" method = "get">
    <label for="spalva" class="form-item">Fono spalva</label><br>
    <input type="text" name='color' class="form-item"> <br>
    <button type="submit" class="form-item">pakeisti fono spalva</button>
      </form>
    

</body>
</html>