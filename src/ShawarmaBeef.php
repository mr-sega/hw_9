<?php

namespace Hillel;

class ShawarmaBeef extends Shawarma
{
    public float $Cost = 75;
    public array $Ingredients = ["чесночный соус, говяжий окорок, огурцы маринованные, маринованный лук с барбарисом и зеленью, салат коул слоу, тандырный лаваш, помидоры свежие, хумус, соус тахин"];
    public string $Title = "Шаурма Говяжья";

    public function __construct(){
        parent::__construct();
    }
}