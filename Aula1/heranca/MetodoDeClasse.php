<?php 

class Comida {

    public static $gosto = "salgado";

    public static function mastigar()
    {

        echo "mastigando";


    }
}




// Comida::mastigar();
// $comida = "Comida";
// $comida::mastigar();

echo Comida::$gosto;