<?php

class Humano
{

    // Atributo
    public $nome = "Breno";
    // Constante de classe
    const VIDA = false;
    // metodo do objeto
    public function programador()
    {
        echo  "Estou Programando";
        echo "<br>";
    }
    public function dormir()
    {
        if (self::VIDA == true) {

            echo "Dormindo";
            echo "<br>";
        } else {

            echo "Estou Morto";
            echo "<br>";
        }
    }

    public function __clone()
    {
        echo "Clonando o Objeto";
    }

    public function __construct($idade)
    {
        $this->idade = $idade;       
    }

    public function __destruct()
    {
        echo "Estou desalocando o espaco da memoria";
    }

}


