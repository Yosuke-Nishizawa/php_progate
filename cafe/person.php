<?php
class Person{
  private static $id_count = 0;
  private $id;
  private $isMale;
  private $name;

  public function __construct($isMale, $name){
    $this->id = ++self::$id_count;
    $this->isMale = $isMale;
    $this->name = $name;
  }

  public function getId(){return $this->id;}
  public function isMale(){return $this->isMale;}
  public function getName(){return $this->name;}
}
?>