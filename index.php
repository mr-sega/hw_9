<?php

require_once 'vendor/autoload.php';

$ShawarmaOdessa = new Hillel\ShawarmaOdessa();
$ShawarmaBeef = new Hillel\ShawarmaBeef();
$ShawarmaMutton = new Hillel\ShawarmaMutton();


echo $ShawarmaOdessa->getTitle() . ", цена: " . $ShawarmaOdessa->getCost() . " грн " . "<br>";
echo $ShawarmaBeef->getTitle() . ", цена: " . $ShawarmaBeef->getCost() . " грн " . "<br>";
echo $ShawarmaMutton->getTitle() . ", цена: " . $ShawarmaMutton->getCost() . " грн " . "<br>";

$calculator = new Hillel\ShawarmaCalculator();

$calculator->add($ShawarmaOdessa);
$calculator->add($ShawarmaBeef);
$calculator->add($ShawarmaMutton);
echo '<pre>';
echo $calculator->getTotalIngredients();
echo '<pre>';
echo $calculator->getFullCost();
echo '<pre>';