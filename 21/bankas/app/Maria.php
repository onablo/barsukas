<?php
namespace Bank;

use App\DB\DataBase;
use PDO;

// struktura ['id' => 58, 'count' => 14]

class Maria implements DataBase {

    private static $db;
    private $pdo;

    public static function getMaria() // singletono paternas
    {
        return self::$db ?? self::$db = new self;
    }

    private function __construct()
    {
        $host = '127.0.0.1';
        $db   = 'bankas';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';       //defolt

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $this->pdo = new PDO($dsn, $user, $pass, $options); //vidinis dalikas
    }


    public function create(array $accountData) : void
    {
        $sql =
        "INSERT INTO saskaitos (`name`, `surname`, `personID`, `accountNr`, `amount`)
        VALUES
            ('".$accountData['name']."', '".$accountData['surname']."', 
            '".$accountData['personID']."', '".$accountData['accountNr']."', '".$accountData['amount']."')";
        $this->pdo->query($sql);

    }   
// `id`, // '".$accountData['id']."',

    public function update( $accountId, array $accountData) : void
    {
        $sql =
        "UPDATE saskaitos
        SET `amount` = ".$accountData['amount']."
        WHERE id = $accountId";


        $this->pdo->query($sql);
    }

    public function delete( $accountId) : void
    {
        $sql =
        "DELETE FROM saskaitos
        WHERE id = $accountId";
        $this->pdo->query($sql);
    }

//, `count` as amount
    public function show(int $accountId) : array
    {
        $sql = 
        "SELECT id
        FROM saskaitos
        WHERE id = $accountId
        ";
        $stmt = $this->pdo->query($sql);
        $row = $stmt->fetch();
        return $row;

    }
//, `count` as amount
    public function showAll() : array {
        $sql = 
        "SELECT id  
        FROM saskaitos
        ORDER BY `amount` DESC
        ";
        $all = [];
        $stmt = $this->pdo->query($sql);
        while ($row = $stmt->fetch())
        {
            $all[] = $row;
        }
        return $all;
    }


}