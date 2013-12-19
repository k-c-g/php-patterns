<?php
namespace Factory\Creator\Factories;
use \Factory\Creator\Creator;
use \Factory\Product\Products\Graphic as GraphicProduct;
class Graphic extends Creator
{
    protected function factoryMethod()
    {
        $product=new GraphicProduct();
        return($product->getProperties());
    }
}
?>