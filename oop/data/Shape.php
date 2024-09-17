<?php

namespace Data;

class Shape
{
  public function getCorner(): int
  {
    return 0;
  }
}

class Rectangel extends Shape
{
  public function getCorner(): int
  {
    return 1;
  }

  public function getParentCorner(): int
  {
    return parent::getCorner();
  }
}
