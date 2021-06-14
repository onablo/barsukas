<!--6.	Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į 
dvi skairtingas formas- vieną GET ir kitą POST. Nenaudodami jokių 
konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai, 
kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 uzduotis</title>
</head>
<body >

    <form action="http://localhost/barsukas/10/ndWEB6.php/" method = "get">
    <button type="submit">GET</button>
    </form>  

    <form action="http://localhost/barsukas/10/ndWEB6.php/" method = "post">
    <button type="submit">POST</button> 
    </form>

<style>
button {    
    width: 40%;
    height: 10%;
    margin: 20px;
    border-radius: 7px;
    background-color: grey;
}    
                    
</style>

</body>
</html>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo
    "<style>
    body {
        background-color: green;
    }
    </style>";
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo  "<style>
    body {
        background-color: yellow;
    }
    </style>";

}
?>
