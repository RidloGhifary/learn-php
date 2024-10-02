<?php

class Data implements IteratorAggregate
{
  var string $first = "First";
  public string $second = "Second";
  private string $third = "Third";
  protected string $fourth = "Fourth";

  public function getIterator(): Traversable
  {
    $array = [
      "first" => $this->first,
      "second" => $this->second,
      "third" => $this->third,
      "fourth" => $this->fourth,
    ];

    $iterator = new ArrayIterator(($array));
    return $iterator;
  }
}

$data = new Data();

foreach ($data as $property => $value) {
  echo "$property : $value" . PHP_EOL;
}

var_dump($data->getIterator());
