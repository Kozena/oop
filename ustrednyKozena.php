<?php

abstract class ustrednyKozena implements iustrednyKozena{
    /**
     * abstraktni trida implementujici rozhrani
     * funkce getNapetiKozena vraci ulozenou hodnotu v napetiKozena jinak NULL
     * funkce setNapetiKozena ulozi hodnotu parametru do promenne napetiKozena
     * @napetiKozena integer, vnitrni reprezentace promenne
     */
    protected $napetiKozena;
    
    public function getNapetiKozena()
    {
        return $this->napetiKozena; 
    }
    
    public function setNapetiKozena($value)
    {
        $this->napetiKozena = $value;     
    }
};
?>