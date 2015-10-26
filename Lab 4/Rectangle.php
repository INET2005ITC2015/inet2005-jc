<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/26/15
 * Time: 5:51 AM
 */
require_once("Shape.php");
class Rectangle extends Shape{

    private $width;
    private $height;

    public function __construct($in_name, $in_width, $in_height){
        parent::__construct($in_name);
        $this->width = $in_width;
        $this->height = $in_height;
    }

    public function CalculateSize(){
        $area = $this->width * $this->height;
        return $area;
    }
}