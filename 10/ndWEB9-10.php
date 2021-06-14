<!--9.	Padarykite juodą puslapį, kuriame būtų 
POST forma, mygtukas ir atsitiktinis kiekis 
(3-10) checkbox su raidėm A,B,C… Padarykite taip, 
kad paspaudus mygtuką, fono spalva pasikeistų 
į baltą, forma išnyktų ir atsirastų skaičius, 
rodantis kiek buvo pažymėta checkboksų (ne kurie, 
o kiek).

10.	Pakartokite 9 uždavinį. Padarykite taip, 
kad atsirastų du skaičiai. Vienas rodytų kiek 
buvo pažymėta, o kitas kiek iš vis buvo jų 
sugeneruota. -->

<?php
    $letters = range('A', 'J');
    $count = rand(3, 10);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $color = 'white';
        $form = false;
    }
    else {
        $color = 'black';
        $form = true;
    }

    // _d($letters);
    // _d($_POST);   // $_POST['let'] == ['D', 'F']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 - 9</title>
</head>
<body style="background-color: <?= $color ?>">

    <a href="">BACK</a><br><br>

    <?php if($form) : ?>
        <form action="" method="post" style="background-color: gray;padding: 10px;">
        <input type="hidden" name="count" value="<?= $count ?>">
        <?php foreach ($letters as $letter): ?>
        <label><?= $letter ?></label>
        <input type="checkbox" name="let[]" value="<?= $letter ?>">
        <?php if (--$count === 0) break ?>
        <?php endforeach ?>
        <button type="submit">CAL</button>
        </form>
    <?php else : ?>
        <br>Sugeneruota: <?= $_POST['count'] ?>
        <br>Pažymėta: <?= count($_POST['let'] ?? []) ?>
    <?php endif ?>



</body>
</html>
