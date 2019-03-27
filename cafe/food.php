<?php
require_once 'menu.php';

class Food extends Menu{
  private $hotness;

  function __construct($name, $amount, $reviews, $img, $hotness){
    parent::__construct($name, $amount, $reviews, $img);
    $this->hotness = $hotness;
  }
  public function getHotness(){
    return $this->hotness;
  }
}
?>