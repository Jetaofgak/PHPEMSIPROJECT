<?php
class Song {
    private $songId;
    private $title;
    private $artist;
    private $duration;

    public function __construct($songId, $title, $artist, $duration) {
        $this->songId = $songId;
        $this->title = $title;
        $this->artist = $artist;
        $this->duration = $duration;
    }

    public function getSongId() {
        return $this->songId;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getArtist() {
        return $this->artist;
    }

    public function getDuration() {
        return $this->duration;
    }
}
?>