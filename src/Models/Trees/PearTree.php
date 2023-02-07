<?php

class PearTree extends FruitTree
{
    /**
     * @return Fruit
     */
    public function getFruit() :Fruit
    {
        return new Pear();
    }

    /**
     * @return void
     */
    protected function setFruitfullnes() :void
    {
        $this->minFruitfulness = 0;
        $this->maxFruitfulness = 20;
    }
}