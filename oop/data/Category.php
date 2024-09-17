<?php

class Category
{
  private string $name;
  private bool $expensive;

  /**
   * Summary of getName
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * Summary of setName
   * @param string $name
   * @return void
   */
  public function setName(string $name): void
  {
    if (trim($name) != "") {
      $this->name = $name;
    }
  }

  /**
   * Summary of isExpensive
   * @return bool
   */
  public function isExpensive(): bool
  {
    return $this->expensive;
  }

  /**
   * Summary of setExpensive
   * @param bool $expensive
   * @return void
   */
  public function setExpensive(bool $expensive): void
  {
    $this->expensive = $expensive;
  }
}
