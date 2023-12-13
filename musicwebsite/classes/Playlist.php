<?php
class Playlist {
    private $playlistId;
    private $name;
    private $owner;
    private $songs = [];

    public function __construct($playlistId, $name, $owner) {
        $this->playlistId = $playlistId;
        $this->name = $name;
        $this->owner = $owner;
    }

    public function getPlaylistId() {
        return $this->playlistId;
    }

    public function getName() {
        return $this->name;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function addSong(Song $song) {
        $this->songs[] = $song;
    }

    public function getSongs() {
        return $this->songs;
    }
}
?>
