<?php
namespace Bank;

class BankController {


    public function bankTest($say)
    {
        echo 'Labas aš BankController';
        echo '<br>';
        echo $say;
    }

    public function index()
    {
        require DIR.'views/home.php';
    }


} 


