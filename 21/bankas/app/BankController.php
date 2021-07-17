<?php
namespace Bank;

class BankController {

    //private static $dbType = 'json';
    private static $dbType = 'maria';

    public static function getData()
    {
        if(self::$dbType == 'jason') {
            return Json::getJason();
        }
        if(self::$dbType == 'maria') {
            return Maria::getMaria();
        }
    }


    public function bankTest($whatToSay)
    {
        $labas = 'Hello, little One';
        return App::view('test', compact('whatToSay', 'labas'));
    }

    public function index()
    {
        return App::view('index', ['accounts' => self::getData()->showAll()]);
    }

    public function add($id)
    {
        return App::view('add', ['id' => $id]);
    }

    public function doAdd($id)
    {
        $id = $id;
        $account = self::getData()->show($id);  //pasiima sena account is jsono
        $account['amount'] += (int) $_POST['amount'];   //kai turi konkr. sask, issaugom - update
        self::getData()->update($id, $account);
        App::redirect();    //i pradini psl
    }

    public function remove($id)
    {
        return App::view('remove', ['id' => $id]);
    }

    public function doRemove($id)
    {
        $id = $id;
        $account = self::getData()->show($id);
        $account['amount'] -= (int) $_POST['amount'];
        self::getData()->update($id, $account);
        App::redirect();
    }

    public function delete($id)
    {
        self::getData()->delete($id);
        App::redirect();
    }


    public function create()
    {
       $accountNr ='LT98730001007276'. rand(1000, 9999);
       return App::view('create_account', ['accountNr' => $accountNr]);
   
    }


    public function save()
    {
        $account = ['name' => $_POST['name'], 'surname' => $_POST['surname'], 'personID' => $_POST['personID'], 'accountNr' => $_POST['accountNr'], 'amount' => 0];
        self::getData()->create($account);
        App::redirect();
    }

}
 
//'id' => $_POST['id'],

