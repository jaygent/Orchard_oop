<?php

class Orchard
{
    protected array $orchard;

    /**
     * @param  FruitTree  $tree
     * @return void
     */
    public function plant(FruitTree $tree)
    {
        $this->orchard[] = $tree;
    }
    

    /**
     * Harvesting from orchard
     * @return array Array with fruits
     */
    public function harvest() :array
    {
        $storage = [];
        foreach($this->orchard as $tree)
        {   
            $treeClass = get_class($tree);
            if(!isset($storage[$treeClass]))
            {
                $storage[$treeClass] = [];
            }
            array_push($storage[$treeClass], ...$tree->harvest());
        }
        foreach($storage as $treeClass => $fruits)
        {
            $storage[$treeClass]['weight'] = $this->calculateWeight($fruits);
        }
        return $storage;
    }


    /**
     * @param  array  $fruits
     * @return int
     */
    protected function calculateWeight(array $fruits) :int
    {
        $weight = 0;
        foreach($fruits as $fruit)
        {
            $weight += $fruit->getWeight();
        }
        return $weight;
    }
}