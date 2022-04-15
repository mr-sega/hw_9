<?php

namespace Hillel;


class Shawarma
{
    protected float $Cost;
    public array $Ingredients;
    public string $Title;

    public function __construct(){
        $this->getCost();
        $this->getIngredients();
        $this->getTitle();
    }

    public function getCost(): float
    {
        return round($this->Cost);
    }

     public function getIngredients(): array
     {
         return $this->Ingredients;
     }

    public function getTitle(): string
    {
        return $this->Title;
    }


}
