<?php require DIR.'views/top.php' ?>

<form action="<?= URL ?>add/<?= $id ?>" method="post">
    <input type="text" name="amount" value="">
        <button style="padding:10px, 0; margin:10px; color:blue; border-radius:7px; background-color:yellow;">Papildyti sąskaitą:</button>      
    </form>

<?php require DIR.'views/bottom.php' ?>