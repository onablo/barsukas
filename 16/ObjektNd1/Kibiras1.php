<?php
// 1.	Sukurti klasę Kibiras1. Sukurti protected savybę 
//akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() 
//pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). 
//Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į 
//kibirą ir rezultatų išvedimą.

class Kibiras1 
{
    protected $akmenuKiekis = 0;
    

    public function prideti1Akmeni($akmenuKiekis) 
    { 
        if (!is_integer($akmenuKiekis)) {                
            return;
        }
        $akmuo = $this->akmenuKiekis++;
        echo '<br>';
        echo " Akmenų yra: $akmuo";
    }

    public function pridetiDaugAkmenu($daug) 
    { 
        if (!is_integer($daug)) {                
            return;
        }  
        $akmenysPrideta = $this->akmenuKiekis + $daug;  
        echo '<br>';
        echo " Pridėta akmenų: $akmenysPrideta";       
                     
    }

    public function kiekPririnktaAkmenu($akmenysPrideta) 
    {  
        $akmenysKiek = $this->akmenuKiekis += $akmenysPrideta;
        echo '<br>';      
        echo "Kibire akmenu yra: $akmenysKiek";
                  
    }
}    


   


