<?php

class BarulhosDeCarro {

    public function getBarulho($nomeDoCarro)
    {

        return "{$nomeDoCarro}, Fazendo Barulho";

    }

}

class Carro extends BarulhosDeCarro
{

    public function Acelerar(){

        return "Vrum Vrum";
    }

}

$fiat = new Carro;
echo $fiat->getBarulho('toro');
echo $fiat->Acelerar();
