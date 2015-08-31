<?php
/**
 * Created by PhpStorm.
 * User: Yuriy Nevmerzhitsky
 * Date: 31.08.2015
 * Time: 23:37
 */

function load($class)
{
    $path = "library".DIRECTORY_SEPARATOR;
    $fileName  = '';
    $lastNamespacePosition = strrpos($class,'\\');
    if($lastNamespacePosition)
    {
        //echo $class . "</br>";
        $namespace = substr($class,0,$lastNamespacePosition);
        $class = substr($class,$lastNamespacePosition+1);
        $fileName = $namespace . DIRECTORY_SEPARATOR;
    }
    $fileName .= $class . ".php";
    //echo $path.$fileName;
    require $path.$fileName;

}

spl_autoload_register('load');