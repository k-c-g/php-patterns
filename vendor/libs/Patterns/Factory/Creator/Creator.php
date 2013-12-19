<?php
namespace Factory\Creator;
abstract class Creator
{
    protected abstract function factoryMethod();
    public function startFactory()
    {
        $mfg= $this->factoryMethod();
        return $mfg;
    }
}
?>