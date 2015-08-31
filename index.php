<?php
/**
 * Created by PhpStorm.
 * User: Yuriy Nevmerzhitsky
 * Date: 31.08.2015
 * Time: 23:37
 */

use Buildings\Cinema;
use Buildings\Shop;
include "autoloader.php";
$buildings = array();

$cinema = new Cinema("Sputnik","Kyiv");
$cinema->addMovie("New movie",50);
$cinema->addMovie("Old movie",30);

array_push($buildings,$cinema);

$shop = new Shop("ATB","Kyiv");
$shop->addProduct("Test product",60);
$shop->addProduct("Second product",100);

array_push($buildings,$shop);

foreach($buildings as $building)
{
    echo $building->toString() . "</br>";
}

