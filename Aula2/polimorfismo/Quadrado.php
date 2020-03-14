<?php

class Quadrado implements Iforma
{
    private $lado;

    public function __construct(float $lado)
    {
        $this->raio = $lado;
    }
}
