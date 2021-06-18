<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sąskaitų sąrašas</title>
</head>
<body>
    <?php include __DIR__ . '/menu.php'?>
    

    <ul>
    <?php foreach($accounts as $account) : ?>
        <li>Sąskaitos Nr. LT<?=$account['id']?></li>
        <li>Kliento vardas: </li>
        <li>Kliento pavardė: </li>
        <li>Kliento asmens kodas: </li>
        <li>Pinigų likutis :<?=$account['amount']?></li>             
        [<a href = "?action = add-funds&id = <?=$account['id']?>">Papildyti</a>]
        [<a href = "?action = rem-funds&id = <?=$account['id']?>">Išimti</a>]
        <form action = "?action = delete&id = <?=$account['id']?>" method="post">
            <button type ="submit">Uždaryti sąskaitą</button><br><br>
        </form>
    <?php endforeach ?>
    </ul>
    
</body>
</html>


