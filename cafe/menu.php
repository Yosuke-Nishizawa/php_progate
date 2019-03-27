<?php
class Menu{
  private $name;
  private $amount = 0;
  private $reviews;
  private $img;

  function __construct($name, $amount, $reviews, $img){
    $this->name = $name;
    $this->amount = $amount;
    $this->reviews = $reviews;
    $this->img = $img;
  }

  function getName(){
    return $this->name;
  }
  function getAmount(){
    return $this->amount;
  }
  function getReviews(){
    return $this->reviews;
  }
  function getImg(){
    return $this->img;
  }
}
?>