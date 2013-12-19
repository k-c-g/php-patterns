<?php
namespace Factory\Product\Products;
use Factory\Product\Product;
class Graphic implements Product
{
    private $mfgProduct;
    public function getProperties()
    {
        $this->mfgProduct="Graphic";
        return $this->mfgProduct;
    }
}
?>