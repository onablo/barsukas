<?php require DIR.'views/top.php' ?>


<ul>
    <?php foreach($accaunts as $accauntData) : ?>        
        
        <li>Kliento vardas: <?=$accauntData['name'] ?></li>         
        <li>Kliento pavardė: <?=$accauntData['surname'] ?></li>
        <li>Kliento asmens kodas: <?=$accauntData['personID'] ?></li>
        <li>Sąskaitos Nr: <?=$accauntData['id'] ?></li>
        <li>Lėšų likutis : <?= $accauntData['amount']?></li>     

        [<a style="margin: 10px; color: blue;" href="<?= URL ?>add/<?= $accauntData['id'] ?>">Pridėti lėšų</a>]

        [<a style="margin: 10px; color: red;" href="<?= URL ?>rem/<?= $accauntData['id'] ?>">Nuskaičiuoti</a>]

        <form action="<?= URL ?>delete/<?=$accauntData['id'] ?>" method="post">
            <button style="padding: 5px, 0; margin: 10px; background-color: red; border-radius: 7px;" type="submit">Uždaryti sąskaitą</button><br><br>
        </form>
    <?php endforeach ?>
</ul>

<?php require DIR.'views/bottom.php' ?>