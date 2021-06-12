<?php

_d($_SERVER['REQUEST_METHOD'], 'metodas ---->');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    _d($_POST, 'issiusti duomenys');

    header('Location: http://localhost/barsukas/09/?ok');
    die;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voveres ir Zuikiai</title>
</head>
<body>
<h1>Voveres ir Zuikiai</h1>
<h2>
<a href="http://localhost/barsukas/09/">Namai</a>
<a href="?rodyti=vovere&puslapis=1">Voveres 1</a>
<a href="?rodyti=vovere&puslapis=2">Voveres 2</a>
<a href="?rodyti=zuikis&puslapis=1">Zuikiai 1</a>
<a href="?rodyti=zuikis&puslapis=2">Zuikiai 2</a>
</h2>
<?php

_d($_GET, 'Masyvas $_GET ---->');
//_d($_POST, 'Masyvas $_POST ---->');
//_d($_SERVER['REQUEST_METHOD'], 'metodas ---->');
//_d($_GET);


if (isset($_GET['rodyti'])) {
    if ($_GET['rodyti'] == 'vovere') {
        echo 'Rodom voveres', ' Puslapis: '. ($_GET['puslapis'] ?? 1);
    }
    elseif ($_GET['rodyti'] == 'zuikis') {
        echo 'Rodom zuikius', ' Puslapis: '. ($_GET['puslapis'] ?? 1);
    }
    else {
        echo 'Tokio neturim';
    }
}
else {
    if(isset($_GET['ok'])) {
    echo '<div style="color:red;">duomenys gauti</div>';
    }
    echo 'Sveiki atvyke i musu puslapi';
}


?>

<form style="margin:30px;" action="http://localhost/barsukas/09/" method = "get">
    <h3>GET</h3>
    Ka rodyti:<input type = "text" name="rodyti">
    Puslapis:<input type = "text" name="puslapis">
    <button type="submit">ziureti</button>
</form>
<form style="margin:30px;" action="http://localhost/barsukas/09/" method = "post">
    <h3>POST</h3>
    Ka rodyti:<input type = "text" name="rodyti">
    Puslapis:<input type = "text" name="puslapis">
    <button type="submit">ziureti</button>
</form>
</body>
</html>


<?php

