<?php


$host = '127.0.0.1';
$db   = 'f22';
$user = 'root';         // DB vartuotojas
$pass = '';             // slaptazodis
$charset = 'utf8mb4';   //default charset



$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [

    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,

    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

    PDO::ATTR_EMULATE_PREPARES   => false,

];

$pdo = new PDO($dsn, $user, $pass, $options);

//Trynimas
// DELETE FROM table_name
// WHERE some_column = some_value
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sql = "DELETE FROM trees
    WHERE id = :aidys";

    //WHERE id = 888 OR 1

    $stmt = $pdo->prepare($sql);    // Paruosimas
    $stmt->execute([ 'aidys' => $_POST['id']  ]);   //vykdymas

    //$pdo->query($sql);



    header('Location: http://localhost/barsukas/22/db/');
    die;

}

// Seeder, gener 0-1500/100 metru
$trees = [
    ['Beržas', rand(0, 1500) / 100, 1],
    ['Eglė', rand(0, 1500) / 100, 2],
    ['Pušis', rand(0, 1500) / 100, 2],
    ['Kedras', rand(0, 1500) / 100, 2],
    ['Palmė', rand(0, 1500) / 100, 3],
    ['Agrastas', rand(0, 1500) / 100, 2],
    ['Šermukšnis', rand(0, 1500) / 100, 1],
    ['Kaštonas', rand(0, 1500) / 100, 1],
];
$n = rand(0, count($trees) -1 );
//Irasymas
// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3,...)

// $sql = "INSERT INTO trees (`name`, height, `type`)
// VALUES ('Beržas', 1.20, 1)
// ";

$sql = "INSERT INTO trees (`name`, height, `type`)
VALUES (?, ?, ?)
";      
//VALUES('".$trees[$n][0]."', ".$trees[$n][1].", ".$trees[$n][2].")


$stmt = $pdo->prepare($sql);    //paruosimas
$stmt-> execute ([ $trees[$n][0], $trees[$n][1], $trees[$n][2]]);
//$pdo->query($sql);



//Skaitymas         - cia php issincia ir t gauti is DB
//SELECT column1, column2, column3,... FROM table_name

$sql = "SELECT id, `name`, height, `type`
FROM trees
WHERE (`type` = 2 AND height > 10) OR (`type` = 1 AND height < 10) OR `type` = 3
ORDER BY `name` DESC            
-- LIMIT 5
";              // - rusiavimas
$stmt = $pdo->query($sql); // DB steitmentas(kuris yra objektas)
while ($row = $stmt->fetch()) // duok man viena eilute
{
    echo $row['id'].' '.$row['name'].' '.$row['height'].' '.$row['type'].'<br>';
}



//Redagavimas
// UPDATE table_name
// SET column1=value, column2=value2,...
// WHERE some_column=some_value 
$sql = "UPDATE trees
SET height = 2.20, `name` = 'Mažas Beržas'
WHERE `name` = 'Beržas'
";
$pdo->query($sql);


$sql = "UPDATE trees
SET height = 55.00
WHERE id = 25
";
$pdo->query($sql);


//Trynimas          - cia istrinam visa eilute
// DELETE FROM table_name
// WHERE some_column = some_value
$sql = "DELETE FROM trees
WHERE id = 61
";

$pdo->query($sql);

?>

<form action="" method="post">
<input type="text" name="id">
<button type="submit">DELETE</button>
</form>
