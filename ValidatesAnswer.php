<?php

namespace App\Exams;

class Example
{
    protected string $email;

    public function getEmail(): ?string
    {
        //replace @ with (at)
        return this->email;
    }
}

$ex = new Example();

$ex->email;
     