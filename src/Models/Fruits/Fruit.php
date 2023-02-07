<?php

abstract class Fruit
{
    /**
     * @var int
     */
    protected int $weight;

    public function __construct()
    {
        $this->setWeight();
    }

    /**
     * Установка веса каждого фрукта
     * @return void
     */
    abstract protected function setWeight(): void;


    /**
     * Получение веса
     *
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }
}