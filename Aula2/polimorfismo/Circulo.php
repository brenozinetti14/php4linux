<?php

class Cirulo implements Iforma
{
    private $raio;

    public function __construct(float $raio)
    {
        $this->raio = $raio;
    }
}
