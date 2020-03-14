<?php


class Avo
{
    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function mostranome()
    {

        return $this->nome;
    }
}

// $avo1 = new avo("Maria");
// $avo2 = new avo("Joana");
// echo $avo1->mostranome();
// echo "<br>";
// echo $avo2->mostranome();

class Mae extends Avo
{
    public function __construct($nome, $idade)
    {
        parent::__construct($nome);
        $this->idade = $idade;
    }

    public function mostraIdade()
    {

        return $this->idade;
    }
}

// classe filha nao pode mais ser herdada 
final class Filha extends Mae
{
    public function __construct($nome, $idade, $genero)
    {
        parent::__construct($nome, $idade);
        $this->genero = $genero;
    }

    public function mostraGenero()
    {

        return $this->genero;
    }
}



$filha = new filha("Josefa", 20,"Mulher");
echo $filha->mostraNome();
echo $filha->mostraIdade();
echo $filha->mostraGenero();
