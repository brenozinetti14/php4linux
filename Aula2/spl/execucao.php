<?php

function __autoload ($class)
{
    require_once ($class . ".php");

}

$colecao = new PalavrasCollection;
$colecao->addItem("Primeiro");
$colecao->addItem("Segundo");
$colecao->addItem("Terceiro");

echo "Ordem de inclusao: <br>";
foreach ($colecao-> getIterator() as $item){
    echo "$item<br>";
}