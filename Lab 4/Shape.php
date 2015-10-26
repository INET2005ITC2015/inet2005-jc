<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/26/15
 * Time: 5:58 AM
 */

abstract class Shape {

    protected $name;

    abstract function CalculateSize();

    public function __construct($in_name){
        $this->name = $in_name;
    }

    public function getName(){
        return ($this->name);
    }

}