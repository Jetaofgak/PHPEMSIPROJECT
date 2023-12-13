<?php
class Artist {
    private $artistId;
    private $name;
    private $albums = [];

    public function __construct($artistId, $name) {
        $this->artistId = $artistId;
        $this->name = $name;
    }

    public function getArtistId() {
        return $this->artistId;
    }

    public function getName() {
        return $this->name;
    }

    public function addAlbum(Album $album) {
        $this->albums[] = $album;
    }

    public function getAlbums() {
        return $this->albums;
    }
}
?>