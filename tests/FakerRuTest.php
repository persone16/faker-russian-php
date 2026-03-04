<?php

use persone16\FakerRussianPhp\FakerRu;
use PHPUnit\Framework\TestCase;

class FakerRuTest extends TestCase
{
    public function testExpertShortDescriptionOnRelations()
    {
        $testObject = new FakerRu();
        $result = $testObject->expertShortDescription(
            'znakomstva', 'female', 'relations'
        );
        $this->assertNotEmpty($result);
    }

    public function testExpertShortDescriptionOnVeterinary()
    {
        $testObject = new FakerRu();
        $result = $testObject->expertShortDescription(
            'nevrologiya', 'koshki', 'veterinary'
        );
        $this->assertNotEmpty($result);
    }

    public function testExpertDescriptionOnRelations()
    {
        $testObject = new FakerRu();
        $result = $testObject->expertDescription(
            'znakomstva', 'female', 'relations'
        );
        $this->assertNotEmpty($result);
    }

    public function testExpertDescriptionOnVeterinary()
    {
        $testObject = new FakerRu();
        $result = $testObject->expertDescription(
            'nevrologiya', 'koshki', 'veterinary'
        );
        var_dump($result);
        exit;
        $this->assertNotEmpty($result);
    }
}