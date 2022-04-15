<?php

namespace Hillel;

class ShawarmaMutton extends Shawarma
{
    public float $Cost = 85;
    public array $Ingredients = ["огурцы маринованные, картофель жареный, чесночный соус, тандырный лаваш, маринованный лук с барбарисом и зеленью, мясо куриное, салат коул слоу, корейская морковь."];
    public string $Title = "Шаурма из Баранины";

    public function __construct(){
        parent::__construct();
    }
}