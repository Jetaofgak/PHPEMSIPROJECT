<?php
class User {
    private $userId; // DO NOT FILL, IT AUTO INCREMENT IN DATABASE
    private $email;
    private $username;
    private $password;
    private $playlists = [];

    public function __construct($username,$email,$password) {
        
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
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

    public function insertClient($tableName,$conn)
    {
        $sql = "INSERT INTO $tableName (Users_FullName, Users_Email,Users_Password,)
                    VALUES ('$this->username', '$this->email','$this->password',)";
        if (mysqli_query($conn, $sql)) {
            self::$successMsg= "New record created successfully";

        } 
        else {
            self::$errorMsg ="Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>
