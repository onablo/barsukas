<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Išimti lėšas</title>
</head>
<body>
    
    <?php include __DIR__.'/menu.php' ?>
    <?php $id=$_GET['id'] ?? 0 ?>    
    <form action="?action=rem&id=<?=$id?>"method="post">
        <input type="text" name="amount">
        <button style="padding: 10px, 0; margin: 10px; color: blue; border-radius: 7px; background-color: yellow;">Nuskaičiuoti iš sąskaitos</button>

        <?php foreach ($accounts as $account) { 
            if ($account['id'] == $id) {
                echo '<br>';
                echo 'Sąskaitos Nr: '.$account['id'];
                echo '<br>';
                echo $account['name'];
                echo $account['surname'];
                echo '<br>';
                echo "Sąskaitos likutis: ".$account['amount'];
            }   
        }             
        ?>
    </form>
</body>
</html> 