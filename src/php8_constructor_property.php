<?php

namespace Enggar\Php8;

class ConstructorProperty
{

    // Ref : https://stitcher.io/blog/constructor-promotion-in-php-8
    public function __construct(public string $name, public int $age){}


    public function hello(): string
    {
        return "Hello " . $this->name;
    }

}