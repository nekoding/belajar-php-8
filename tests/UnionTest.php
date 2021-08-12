<?php

namespace Tests;

use Enggar\Php8\PhpUnion;
use PHPUnit\Framework\TestCase;

class UnionTest extends TestCase
{

    public function testMethodCanReturnUnionType()
    {

        $union = new PhpUnion();

        $resultInt = $union->example(10);
        $resultFloat = $union->example(3.14);


        $this->assertIsInt($resultInt);
        $this->assertIsFloat($resultFloat);

    }

    public function testMethodCanUsingNullableParams()
    {
        
        $union = new PhpUnion();

        $resultWithNull = $union->example2(null);

        $resultWithString = $union->example2("Sakura Miko");

        $this->assertNull($resultWithNull);

        $this->assertIsString($resultWithString);

    }

}