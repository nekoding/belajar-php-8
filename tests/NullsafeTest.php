<?php

namespace Tests;

use Enggar\Php8\Nullsafe;
use PHPUnit\Framework\TestCase;

class NullsafeTest extends TestCase
{

    public function testChainMethodCanBeNull()
    {

        $testString = new Nullsafe("sakura miko");

        $this->assertIsString($testString->getName()->hello()->goodbye());

        $testNullable = new Nullsafe("");

        $this->assertNull($testNullable?->getName()?->hello()?->goodbye());

    }

}