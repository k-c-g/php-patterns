<?php
namespace Factory\Creator\Factories;
use \Factory\Creator\Creator;
use \Factory\Product\Products\Text as TextProduct;
class Text extends Creator
{
    protected function factoryMethod()
    {
        $product=new TextProduct();
        return($product->getProperties());
    }
}
?>