<?php
// 1.	Sukurti klasę Kibiras1. Sukurti protected savybę 
//akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() 
//pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). 
//Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į 
//kibirą ir rezultatų išvedimą.

class Kibiras1 
{
    protected $akmenuKiekis = 0;
    

    public function prideti1Akmeni() 
    { 
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($daug)  //set
    {                                         //uztenka func(int $kiekis)
                                              //vietoje validacijos
        if (!is_integer($daug)) {                
            return;
        }  
        $this->akmenuKiekis += $daug;  
    }

    public function kiekPririnktaAkmenu()    //get
    {  
        return $this->akmenuKiekis ;

    }
} 
   

