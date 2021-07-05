<?php require DIR.'views/top.php' ?>
<ul>
<?php
        usort($accounts, function($a, $b) {
            return $a['surname'] <=> $b['surname'];
        })
?>
    
    <?php foreach($accounts as $account) : ?>
        
        <li>Sąskaitos Nr: <?=$account['id'] ?></li>
        <li>Kliento vardas: <?=$account['name'] ?></li>         
        <li>Kliento pavardė: <?=$account['surname'] ?></li>
        <li>Kliento asmens kodas: <?=$account['personID'] ?></li>
        <li>Lėšų likutis : <?= $account['amount']?></li>     

        [<a style="margin: 10px; color: blue;" href="?action=add&id=<?= $account['id'] ?>">Pridėti lėšų</a>]

        [<a style="margin: 10px; color: red;" href="?action=rem&id=<?= $account['id'] ?>">Nuskaičiuoti</a>]

        <form action="?action=delete&id=<?=$account['id'] ?>" method="post">
            <button style="padding: 5px, 0; margin: 10px; background-color: red; border-radius: 7px;" type="submit">Uždaryti sąskaitą</button><br><br>
        </form>
    <?php endforeach ?>
</ul>
<?php require DIR.'views/bottom.php' ?>