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
        <li>Sąskaitos Nr. LT<?=$account['id'] ?></li>
        <li>Kliento vardas: <?=$account['name'] ?></li>         
        <li>Kliento pavardė: <?=$account['surname'] ?></li>
        <li>Kliento asmens kodas: <?=$account['personID'] ?></li>
        <li>Pinigų likutis :<?=$account['amount']?></li>             
        [<a style = "margin: 10px; color: blue;" href = "?action = add&id = <?=$account['id']?>">Pridėti</a>]
        [<a style = "margin: 10px; color: red;" href = "?action = rem&id = <?=$account['id']?>">Nuskaičiuoti</a>]
        <form action = "?action = delete &id = <?=$account['id']?>" method="post">
            <button style = "padding: 5px, 0; margin: 10px; background-color: red; border-radius: 7px;"  type ="submit">Uždaryti sąskaitą</button><br><br>
        </form>
    <?php endforeach ?>
    </ul>
    
</body>
</html>

