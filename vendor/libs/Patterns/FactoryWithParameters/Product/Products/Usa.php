<?php
namespace FactoryWithParameters\Product\Products;
use FactoryWithParameters\Product\Product;
use FactoryWithParameters\Helpers\FormatHelper;
class Usa implements Product
{
    private $mfgProduct;
    private $formatHelper;
    public function getProperties()
    {
        $this->formatHelper=new FormatHelper();
        $this->mfgProduct=$this->formatHelper->addTop();
        $this->mfgProduct.="Usa";
        $this->mfgProduct .=$this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
}
?>