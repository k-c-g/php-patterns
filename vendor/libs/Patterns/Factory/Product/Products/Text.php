<?php
namespace Factory\Product\Products;
use Factory\Product\Product;
class Text implements Product
{
    private $mfgProduct;
    public function getProperties()
    {
        $this->mfgProduct="Funny story.";
        return $this->mfgProduct;
    }
}
?>