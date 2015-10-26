<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/26/15
 * Time: 5:51 AM
 */
require_once("Shape.php");
require_once("iResizeable.php");
class Triangle extends Shape  implements iResizable  {

    private $base;
    private $height;
    private $area;

    public function __construct($in_name, $in_base, $in_height){
        parent::__construct($in_name);
        $this->base = $in_base;
        $this->height = $in_height;
    }

    public function CalculateSize(){
        $area = ($this->base * $this->height)/2;
        return $area;
    }

    public function changeSize($area, $changeSize){

        $changePercent = $changeSize / 100;
        $newArea = $area * $changePercent;
        $newHeight = ($newArea/$this->base)*2;
        return $newHeight;
    }
}