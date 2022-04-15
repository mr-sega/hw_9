<?php

namespace Hillel;

class ShawarmaCalculator
{
    private array $totalProduct = [];

    private int $TotalPrice = 0;

    public function add(Shawarma $shawarma): void
    {
        $this->TotalPrice += $shawarma->getCost();
        $this->totalProduct = $shawarma->getIngredients();
    }

    public function getTotalIngredients(): string
    {

        return "ингридиенты" . ": " . implode(array_unique($this->totalProduct));
    }

    public function getFullCost(): string
    {
        return $this->TotalPrice . " грн";
    }
}