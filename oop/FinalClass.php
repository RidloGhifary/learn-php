<?php

class SocialMedia
{
  public string? $nama;
}

class Facebook extends SocialMedia
{
  final public function login(): bool{
    return true;
  }
};

final class Instagram extends SocialMedia
{
  // Error function
  public function login(): bool{
    return false;
  }
};

// Error class
class FinalClass extends SocialMedia
{
}