<?php
class User {
    private $userId;
    private $username;
    private $playlists = [];

    public function __construct($userId, $username) {
        $this->userId = $userId;
        $this->username = $username;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPlaylists() {
        return $this->playlists;
    }

    public function addPlaylist(Playlist $playlist) {
        $this->playlists[] = $playlist;
    }
}
?>