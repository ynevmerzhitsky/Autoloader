<?php
/**
 * Created by PhpStorm.
 * User: Yuriy Nevmerzhitsky
 * Date: 01.09.2015
 * Time: 0:27
 */

namespace Buildings;


class Shop extends Building
{
    protected $products;

    public function addProduct($name,$price)
    {
        $this->products[$name] = $price;
    }

    public function  removeProduct($name)
    {
        isset($this->products[$name]);
    }

    public function toString()
    {
        $result = parent::toString() . "</br>";
        $result .= "Products" . "</br>";

        foreach($this->products as $name => $price)
        {
            $result .= $name . " " . $price . "</br>";
        }
        return $result;
    }
}