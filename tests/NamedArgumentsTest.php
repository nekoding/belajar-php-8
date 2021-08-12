<?php

namespace Test;

use Enggar\Php8\NamedArguments;
use PHPUnit\Framework\TestCase;

class NamedArgumentsTest extends TestCase
{

    public function testNamedArguments()
    {

        $example = new NamedArguments(name: "Sakura Miko", age: "17");

        $this->assertIsString($example->introduction());

    }

}