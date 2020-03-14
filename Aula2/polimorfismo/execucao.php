<?php

function __autoload(string $class)
{

    require_once($class . ".php");
}
