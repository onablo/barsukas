<!--7.	Pakartokite 6 uždavinį. Papildykite jį kodu, 
kuris naršyklę po POST metodo peradresuotų tuo pačiu 
adresu (t.y. į patį save) jau GET metodu.-->

<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo '<body style="background-color: green">';
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   eheader('Location: ./ndWEB7.php');
   die;
   echo '<body style="background-color: yellow">'; 
      
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 uzduotis</title>
</head>


<body>
    <form action="./ndWEB7.php" method="get">
        <button type="submit">GET</button>
    </form>
    <br>
    <form action="./ndWEB7.php" method="post">
        <button type="submit">POST</button>
    </form>

</body>
</html>
