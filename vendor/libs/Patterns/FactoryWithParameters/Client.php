<?php
namespace FactoryWithParameters;
use FactoryWithParameters\Creator\Factories\Country;
use FactoryWithParameters\Product\Products\Usa;
use FactoryWithParameters\Product\Products\Germany;
class Client
{
    private $countryFactory;
    public function __construct()
    {
        $this->countryFactory=new Country();
        echo $this->countryFactory->doFactory(new Usa());
        echo $this->countryFactory->doFactory(new Germany());
    }
}
?>