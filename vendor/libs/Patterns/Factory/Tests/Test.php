<?php
include("config.php");
use \Factory\Creator\Factories\Text;
use \Factory\Creator\Factories\Graphic;
class Test extends PHPUnit_Framework_TestCase
{
    protected $graphicObject;
    protected $textObject;
    public function setUp()
    {
        $this->graphicObject=new Graphic();
        $this->textObject=new Text();
    }

    public function testUsa()
    {
        $this->assertEquals("Funny story.",$this->textObject->startFactory());
        $this->assertNotEquals("Funny story..",$this->graphicObject->startFactory());
        $this->assertEquals("Graphic",$this->graphicObject->startFactory());
        $this->assertNotEquals("Graphic!",$this->graphicObject->startFactory());
    }
}