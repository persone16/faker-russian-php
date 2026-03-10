<?php

use persone16\FakerRussianPhp\FakerRu;
use PHPUnit\Framework\TestCase;

class FakerRuTest extends TestCase
{
    /**
     * relations expertShortDescription
     */
    public function testExpertShortDescriptionOnRelations()
    {
        $testObject = new FakerRu();
        $result = $testObject->expertShortDescription(
            'znakomstva', 'female', 'relations'
        );
        $this->assertNotEmpty($result);
    }

    /**
     * veterinary expertShortDescription
     */
    public function testExpertShortDescriptionOnVeterinary()
    {
        $testObject = new FakerRu();
        $result = $testObject->expertShortDescription(
            'nevrologiya', 'koshki', 'veterinary'
        );
        $this->assertNotEmpty($result);
    }

    /**
     * relations expertDescription
     */
    public function testExpertDescriptionOnRelations()
    {
        $testObject = new FakerRu();
        $result = $testObject->expertDescription(
            'znakomstva', 'female', 'relations'
        );
        $this->assertNotEmpty($result);
    }

    /**
     * veterinary expertDescription
     */
    public function testExpertDescriptionOnVeterinary()
    {
        $testObject = new FakerRu();
        $result = $testObject->expertDescription(
            'nevrologiya', 'koshki', 'veterinary'
        );
        $this->assertNotEmpty($result);
    }

    /**
     * relations titleQuestion
     */
    public function testTitleQuestionOnRelations()
    {
        $testObject = new FakerRu();
        $result = $testObject->titleQuestion(
            null, 'relations'
        );
        $this->assertNotEmpty($result);
    }

    /**
     * veterinary titleQuestion
     */
    public function testTitleQuestionOnVeterinary()
    {
        $testObject = new FakerRu();
        $result = $testObject->titleQuestion(
            null, 'veterinary'
        );
        $this->assertNotEmpty($result);
    }

    /**
     * relations descriptionQuestion
     */
    public function testDescriptionQuestionOnRelations()
    {
        $testObject = new FakerRu();
        $result = $testObject->descriptionQuestion(
            null, 'relations'
        );
        $this->assertNotEmpty($result);
    }

    /**
     * veterinary descriptionQuestion
     */
    public function testDescriptionQuestionOnVeterinary()
    {
        $testObject = new FakerRu();
        $result = $testObject->descriptionQuestion(
            null, 'veterinary'
        );
        $this->assertNotEmpty($result);
    }

    /**
     * relations answerQuestion
     */
    public function testAnswerQuestionOnRelations()
    {
        $testObject = new FakerRu();
        $result = $testObject->answerQuestion(
            null, 'relations'
        );
        $this->assertNotEmpty($result);
    }

    /**
     * veterinary answerQuestion 
     */
    public function testAnswerQuestionOnVeterinary()
    {
        $testObject = new FakerRu();
        $result = $testObject->answerQuestion(
            null, 'veterinary'
        );
        $this->assertNotEmpty($result);
    }

    /**
     * relations commentQuestion
     */
    public function testCommentQuestionOnRelations()
    {
        $testObject = new FakerRu();
        $result = $testObject->commentQuestion(
            null, 'relations'
        );
        $this->assertNotEmpty($result);
    }

    /**
     * veterinary commentQuestion
     */
    public function testCommentQuestionOnVeterinary()
    {
        $testObject = new FakerRu();
        $result = $testObject->commentQuestion(
            null, 'veterinary'
        );
        $this->assertNotEmpty($result);
    }
}