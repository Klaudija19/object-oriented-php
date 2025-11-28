<?php

class Playlist
{
    /** 
     * param Song[] $songs
     */
    public function __construct(public string $name, public array $songs)
    {
        //
    }
}
class Song
{
    public function __construct(public string $name, public string $artist)
    {

    }
}
$songs = [
    new Song('My Heart Will Go On', 'Celine Dion')
]

$playlist = new Playlist('90s Movie Soundtracks', $songs);

foreach ($playlist->songs as $song) {
    var_dump($song->artist);

}

