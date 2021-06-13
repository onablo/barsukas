<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 uzduotis</title>
</head>
<body style="background-color: red;">
    <h1 style= "color: white">Raudonas</h1>
    <form action= "" method="get">
    <a style = "background-color: white; padding: 15px; border-radius: 7px;" href="?page=1">I save</a>
    </form>

<?php    
    if (!empty($GET)) {
        header('Location:http://localhost/barsukas/10/ndWEB5blue.php');
    }
    
?>

</body>
</html>