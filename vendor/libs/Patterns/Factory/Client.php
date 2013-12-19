<?php
namespace Factory;
use \Factory\Creator\Factories\Text;
use \Factory\Creator\Factories\Graphic;
class Client
{
    private $someGraphicObject;
    private $someTextObject;
    public function __construct()
    {
        $this->someGraphicObject=new Graphic();
        echo $this->someGraphicObject->startFactory() . "<br />";
        $this->someTextObject=new Text();
        echo $this->someTextObject->startFactory() . "<br />";
    }
}
?>