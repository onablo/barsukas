<?php require DIR.'views/top.php' ?>

<form action="<?= URL ?>add/<?= $id ?>" method="post">
    <input type="text" name="amount" value="">
    <button>Pridėti Pridėti agurkų į dėžę <?= $id ?></button>
</form>

<?php require DIR.'views/bottom.php' ?>