<?php

class User
{
  private(set) string $email {
    get => str_replace('@', '(at)', $this->email); 

  }
    public function __construct(string $email)
    {
       $this->email = $email;
    }
    public function updateEmail(string $email)
    {
      // filter
      $this->email = $email;
    }
 }


$user = new User('jeffrey@laracast.com');

$user->updateEmail('asdsfaghgjyjgt');

echo $user->email;
