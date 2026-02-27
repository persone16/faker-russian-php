<?php

use persone16\FakerRussianPhp\FakerRu;
use PHPUnit\Framework\TestCase;

class FakerRuTest extends TestCase
{
    public function testExpertShortDescription()
    {
        $testObject = new FakerRu();
        $result = $testObject->expertShortDescription(
            'znakomstva', 'female', 'relations'
        );
        $this->assertNotEmpty($result);
    }
}