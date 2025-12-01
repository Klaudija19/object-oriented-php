<?php

//Encapsulation : Restriction of access to an object's internals.

class Person
{
 public function __construct(public string $name)
 {

 }
 public function job()
 {

 }
 public function favoriteTeam()
 {

 }
 protected function thingsThatKeepUpAtNight()
 {
    return 'Bob is afraid of dying';
 }
}
$bob = new Person('Bob');

var_dump($bob->thingsThatKeepUpAtNight());