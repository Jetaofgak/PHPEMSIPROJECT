<?php

class Playlist {

    public $playlistId;
    public $userId;
    public $playlistName;

    public static $errorMsg = "";
    public static $successMsg = "";

    public function __construct($userId,$playlistName) {
        // Initialize the class attributes with the parameters
        $this->$userId = $userId;
        $this->playlistName = $playlistName;
        echo "UserID: " . $this->userId;
    }

    public function insertPlaylist($tableName, $conn) {
        // Insert a playlist into the database
        $sql = "INSERT INTO $tableName (users_id, playlist_name) VALUES (?, ?)";
        
        // Préparez la requête
        $stmt = mysqli_prepare($conn, $sql);
        // Liez les valeurs aux espaces réservés
        mysqli_stmt_bind_param($stmt, "is", $this->userId, $this->playlistName);
    
        // Exécutez la requête
        if (mysqli_stmt_execute($stmt)) {
            self::$successMsg = "New playlist created successfully";
        } else {
            self::$errorMsg = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        // Fermez la déclaration
        mysqli_stmt_close($stmt);
    }

    public static function selectAllPlaylists($tableName, $conn) {
        // Select all playlists from the database and return the result as an array
        $sql = "SELECT playlist_id, users_id, playlist_name FROM $tableName";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Retrieve the data from each row
            $data = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            return $data;
        }
    }

    static function selectPlaylistById($tableName, $conn, $id) {
        // Select a playlist by ID and return the result of the row
        $sql = "SELECT users_id, playlist_name FROM $tableName WHERE playlist_id='$id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Retrieve the data from the row
            $row = mysqli_fetch_assoc($result);
        }
        return $row;
    }

    static function updatePlaylist($playlist, $tableName, $conn, $id) {
        // Update a playlist by ID with the values from $playlist parameter
        $sql = "UPDATE $tableName
                SET users_id='$playlist->userId', playlist_name='$playlist->playlistName'
                WHERE playlist_id='$id'";

        if (mysqli_query($conn, $sql)) {
            self::$successMsg = "Playlist updated successfully";
            header("Location: read_playlists.php");
        } else {
            self::$errorMsg = "Error updating playlist: " . mysqli_error($conn);
        }
    }

    static function deletePlaylist($tableName, $conn, $id) {
        // Delete a playlist by ID
        $sql = "DELETE FROM $tableName WHERE playlist_id='$id'";

        if (mysqli_query($conn, $sql)) {
            self::$successMsg = "Playlist deleted successfully";
            header("Location: read_playlists.php");
        } else {
            self::$errorMsg = "Error deleting playlist: " . mysqli_error($conn);
        }
    }
}

?>
