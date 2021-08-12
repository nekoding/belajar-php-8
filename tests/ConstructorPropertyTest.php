<?php 

namespace Test;

use Enggar\Php8\ConstructorProperty as Php8ConstructorProperty;
use PHPUnit\Framework\TestCase;

class ConstructorPropertyTest extends TestCase
{

    public function testMethodCanUsingConstructorProperty()
    {
        $example = new Php8ConstructorProperty("Sakura Miko", 10);

        $this->assertIsString($example->hello());
        $this->assertStringContainsString("Sakura Miko", $example->hello());
    }

}