<?php

// trait NomeDoTrait {

//     public function nomeDoMetodo()
//     {
//         // .......

//     }


// }

// class NomeDaClasse
// {
//     use NomeDoTrait;

// }

// $obj = new NomeDaClasse;
// $obj->nomeDoMetodo();


trait Operacoes {

    public function somar ($n1 , $n2) : float
    {
        return $n1 + $n2;
    }

    public function subtrair ($n1,$n2) : float
    {
        return $n1 - $n2;
    }

    public function multiplicar ($n1 , $n2) : float
    {
        return $n1 * $n2;
    }

    public function dividir ($n1 , $n2) : float
    {
        return $n1 / $n2;
    }

}

class calculadora {

    use Operacoes;
}

$calc = new Calculadora;
$calc->somar(3,4);
echo $calc->somar(3,4);
$calc->subtrair(5,4);
echo $calc->subtrair(5,4);