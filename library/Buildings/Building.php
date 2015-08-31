<?php
/**
 * Created by PhpStorm.
 * User: Yuriy Nevmerzhitsky
 * Date: 01.09.2015
 * Time: 0:21
 */

namespace Buildings;


abstract class Building
{
    public function __construct($name,$address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    protected $name;

    protected $address;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function toString()
    {
        return $this->name . " " . $this->address;
    }
}