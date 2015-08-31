<?php
/**
 * Created by PhpStorm.
 * User: Yuriy Nevmerzhitsky
 * Date: 01.09.2015
 * Time: 0:33
 */

namespace Buildings;


class Cinema extends Building
{
    protected $movies;

    public function addMovie($name,$price)
    {
        $this->movies[$name] = $price;
    }

    public function  removeMovie($name)
    {
        isset($this->movies[$name]);
    }

    public function toString()
    {
        $result = parent::toString() . "</br>";

        $result .= "Movies" . "</br>";

        foreach($this->movies as $name => $price)
        {
            $result .= $name . " " . $price . "</br>";
        }
        return $result;
    }
}