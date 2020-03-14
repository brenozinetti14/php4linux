<?php

echo "<pre>";

require("autoload.php");

$pessoa = new Humano(12);
// $pessoa->programador();
// $pessoa->dormir();
// echo $pessoa->nome;

$pessoa2 = new Humano(13);
// $pessoa2->nome = "Sandro";
// echo $pessoa2->nome;
// echo Humano::VIDA;


//$pessoa = new Humano();
//$pessoa->programador();
//$pessoa->dormir();
//echo $pessoa->nome;

//$pessoa2 = new Humano();
$pessoa2->nome = "Sandro";
// $pessoa3 = clone ($pessoa2);
// $pessoa3->nome = "Henrique";
var_dump($pessoa);
unset($pessoa);
var_dump($pessoa2);
//echo $pessoa2->nome;
//echo Humano::VIDA;

// colocar na primeira linha
//echo "<pre>";
