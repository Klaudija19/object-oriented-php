<?php

class Playlist
{
  public function __construct(public $name, public  $songs)
    {
       //
    }
    public function shuffle()
    {
        shuffle($this->songs);
    }
}
//$playlists = [];

//$playlists[] = new Playlist('80s Headbangers' , [
  //  'Back in Black' , 
    //'Are you ready' , 
    //'Hells Bells' , 
    //'Highway to Hell'

//]);
//$playlists[0]->shuffle();

//die(var_dump($playlists));


