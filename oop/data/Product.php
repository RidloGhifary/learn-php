<?php

class Product
{
  protected string $name;
  private int $price;

  public function __construct(string $name, int $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getProduct(): string
  {
    return "$this->name : {$this->convertRupish($this->price)}";
  }

  private function convertRupish(int $number): string
  {
    return "Rp." .
      number_format($number, 0, ",", ".");
  }
}

class ProductDummy extends Product
{
  public function info()
  {
    echo "Name $this->name" . PHP_EOL;
  }
}
