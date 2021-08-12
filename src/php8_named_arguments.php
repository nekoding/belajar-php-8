<?php

namespace Enggar\Php8;

class NamedArguments
{

    protected $name;

    protected $age;


    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduction(): string
    {
        return "My name is " . $this->name . " and my age is " . $this->age . " years old";
    }

}