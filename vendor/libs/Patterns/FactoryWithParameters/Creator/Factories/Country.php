<?php
namespace FactoryWithParameters\Creator\Factories;
use FactoryWithParameters\Creator\Creator;
use FactoryWithParameters\Product\Product;
class Country extends Creator
{
    private $country;
    protected function factoryMethod(Product $product)
    {
        $this->country=$product;
        return($this->country->getProperties());
    }
}
?>