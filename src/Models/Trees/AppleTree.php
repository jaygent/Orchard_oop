<?php

class AppleTree extends FruitTree
{
    /**
     * @return Fruit
     */
    public function getFruit() :Fruit
    {
        return new Apple();
    }

    /**
     * @return void
     */
    protected function setFruitfullnes() :void
    {
        $this->minFruitfulness = 40;
        $this->maxFruitfulness = 50;
    }
}