<?php
namespace Bank;

class BankController {


    public function bankTest($whatToSay)
    {
        $labas = 'Hello, little One';
        return App::view('test', compact('whatToSay', 'labas'));
    }

    public function index()
    {
        return App::view('index', ['accounts' => Json::getJson()->showAll()]);
    }

    public function addFunds($id)
    {
        return App::view('add', ['id' => $id]);
    }

    public function doAddFunds($id)
    {
        $id = (int) $id;
        $account = Json::getJson()->show($id);
        $account['amount'] += (int) $_POST['amount'];
        Json::getJson()->update($id, $account);
        App::redirect();
    }

    public function removeFunds($id)
    {
        return App::view('remove', ['id' => $id]);
    }

    public function doRemoveFunds($id)
    {
        $id = (int) $id;
        $account = Json::getJson()->show($id);
        $account['amount'] -= (int) $_POST['amount'];
        Json::getJson()->update($id, $account);
        App::redirect();
    }

    public function delete($id)
    {
        Json::getJson()->delete($id);
        App::redirect();
    }


    public function create()
    {
        return App::view('create_account');
    }

    public function save()
    {
        $account = ['id' => $_POST['id'], 'name' => $_POST['name'], 'surname' => $_POST['surname'], 'personID' => $_POST['personID'], 'amount' => 0];
        Json::getJson()->create($account);
        App::redirect();
    }

}



