<!--5.	Sukurkite du atskirus puslapius blue.php ir red.php 
Juose sukurkite linkus į pačius save (abu į save ne į kitą 
puslapį!). Padarykite taip, kad paspaudus ant  linko puslapis 
ne tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!)
naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir 
atvirkščiai). -->

<?php 

if (!empty($_GET)) {
    header('Location:http://localhost/barsukas/10/ndWEB5red.php');
    die;
}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 uzduotis</title>
</head>

<body style="background-color: blue">
    <h1 style= "color: white">Melynas</h1>
    <form action= "" method="get">
        <a style = "background-color: white; padding: 15px; border-radius: 7px;" href="?page=1">I save</a>
    </form>


</body>
</html>




