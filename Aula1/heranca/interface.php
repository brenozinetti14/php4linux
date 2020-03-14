<?php

interface RacaoDeGato
{

    public function empacotar($kg);
    public function setpreco($preco);
    public function distribuir($cliente);
    public function fabricar($materiaPrima);

    
}

class Empresa implements RacaoDeGato
{
    public function empacotar($kg)
    {
       echo "empacotando sacos de racao";
    }
    public function setpreco($preco)
    {
        echo "inserindo preco";
    }
    public function distribuir($cliente)
    {
        echo "distribuindo novos sacos de racao";
    }
    public function fabricar($materiaPrima)
    {
        echo "fabricando novos tipos de racao";
    }

}


$obj = new Empresa();
$obj ->fabricar("Fabricando coco de cavalo");