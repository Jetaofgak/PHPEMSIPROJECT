<?php
class Album {
    private $albumId;
    private $title;
    private $artist;
    private $releaseYear;

    public function __construct($albumId, $title, $artist, $releaseYear) {
        $this->albumId = $albumId;
        $this->title = $title;
        $this->artist = $artist;
        $this->releaseYear = $releaseYear;
    }

    public function getAlbumId() {
        return $this->albumId;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getArtist() {
        return $this->artist;
    }

    public function getReleaseYear() {
        return $this->releaseYear;
    }
}
?>