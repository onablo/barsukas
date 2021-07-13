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
        $accounts = self::getData()->showAll();
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
        return App::view('create_account');
    }

    public function save()
    {
        $account = ['id' => $_POST['id'], 'name' => $_POST['name'], 'surname' => $_POST['surname'], 'personID' => $_POST['personID'], 'amount' => 0];
        self::getData()->create($account);
        App::redirect();
    }

}



