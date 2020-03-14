<?php
echo "<pre>";

class MinhaClasse
{

    protected $protegida = "Protegida";
    public $publica = 'Publica';
    private $privada = "Privada";


    function mostrarPropriedades()
    {
        echo $this->publica;
        echo $this->privada;
        echo $this->protegida;
    }
}

class MinhaClasseFilha extends MinhaClasse
{

    function mostrarPropriedades()
    {
        echo $this->publica;
        echo $this->privada;
        echo $this->protegida;
    }
}
$obj = new MinhaClasse;
$obj->mostrarPropriedades();
$obj2 = new MinhaClasseFilha;
$obj2->mostrarPropriedades();
// echo $obj->publica;
// echo $obj->privada;
// echo $obj->protegida;
