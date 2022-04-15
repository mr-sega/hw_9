<?php

namespace Hillel;

class ShawarmaOdessa extends Shawarma
{
    protected float $Cost = 69;
    public array $Ingredients = ["огурцы маринованные, картофель жареный, чесночный соус, тандырный лаваш, маринованный лук с барбарисом и зеленью, мясо куриное, салат коул слоу, корейская морковь."];
    public string $Title = 'Шаурма Одесская';

    public function __construct(){
        parent::__construct();
    }



}
