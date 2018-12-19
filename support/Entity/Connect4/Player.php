<?php

declare(strict_types=1);

namespace Support\Entity\Connect4;

final class Player
{

    private $id,
    private $player,
    private $name,
    
  
  public function choiceColumn($player)
  {
        return $this->$player;
  }
  

  
  public function printName()
  {
    return $this->$name;
  }
  
  public function id()
  {
    return $this->id;
  }
  

  
  public function setId($id)
  {
    $id = (int) $id;
    
    if ($id > 0)
    {
      $this->id = $id;
    }
  }
  
  public function setName($name)
  {
    if (is_string($name))
    {
      $this->name = $name;
    }
  }


    
}