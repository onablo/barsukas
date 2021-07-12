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

/*
INNER JOIN

SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name = table2.column_name;


SELECT column_name(s)
FROM table1
LEFT JOIN table2
ON table1.column_name = table2.column_name;


SELECT column_name(s)
FROM table1
RIGHT JOIN table2
ON table1.column_name = table2.column_name;
*/
// * reiskia paselektink ALL: SELECT*


$sql = "SELECT `name`, `number`, clients.id as cid, phones.id as pid 
FROM clients
RIGHT JOIN phones 
ON clients.id = phones.client_id  
ORDER BY clients.name         
";

$stmt = $pdo->query($sql); // DB steitmentas(kuris yra objektas)
while ($row = $stmt->fetch()) // duok man viena eilute
{
    echo 'Client id: '.$row['cid'].' '.$row['name'].' Phone id: '.$row['pid'].' '.$row['number']. '<br>';
}