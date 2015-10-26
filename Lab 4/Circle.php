<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/26/15
 * Time: 5:51 AM
 */
require_once("Shape.php");
class Circle extends Shape {

    private $radius;

    public function __construct($in_name, $in_radius){
        parent::__construct($in_name);
        $this->radius = $in_radius;
    }

    public function CalculateSize(){
        $area = 3.14 * $this->radius * $this->radius;
        return $area;
    }

}