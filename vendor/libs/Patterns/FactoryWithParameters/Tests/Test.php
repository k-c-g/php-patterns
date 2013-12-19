<?php
include("config.php");
use FactoryWithParameters\Creator\Factories\Country;
use FactoryWithParameters\Product\Products\Usa;
class Test extends PHPUnit_Framework_TestCase
{
    protected $countryFactory;
    public function setUp()
    {
        $this->countryFactory= new Country();
    }

    public function testUsa()
    {
        $this->assertEquals("Start Usa End",$this->countryFactory->doFactory(new Usa()));
        $this->assertNotEquals("Start Usa End ",$this->countryFactory->doFactory(new Usa()));
    }
}