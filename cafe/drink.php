<?php
require_once 'menu.php';

class Drink extends Menu{
  private $isHot = false;

  function __construct($name, $amount, $reviews, $img, $isHot){
    parent::__construct($name, $amount, $reviews, $img);
    $this->isHot = $isHot;
  }
  public function isHot(){
    return $this->isHot;
  }
}
?>