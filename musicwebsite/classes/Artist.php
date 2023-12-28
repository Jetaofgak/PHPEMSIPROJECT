<?php

class Artist {

    public $id;
    public $name;

    public static $errorMsg = "";
    public static $successMsg = "";

    public function __construct($name) {
        // initialize the attributes of the class with the parameters
        $this->name = $name;
    }

    public function insertArtist($tableName, $conn) {
        // insert an artist into the database
        $sql = "INSERT INTO $tableName (Artist_Name) VALUES ('$this->name')";
        if (mysqli_query($conn, $sql)) {
            self::$successMsg = "New record created successfully";
        } else {
            self::$errorMsg = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    public static function selectAllArtists($tableName, $conn) {
        // select all the artists from the database and return the result as an array
        $sql = "SELECT id, name FROM $tableName";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $data = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            return $data;
        }
    }

    static function selectArtistById($tableName, $conn, $id) {
        // select an artist by id and return the row result
        $sql = "SELECT name FROM $tableName WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
        }
        return $row;
    }

    static function updateArtist($artist, $tableName, $conn, $id) {
        // update an artist by id with the values of $artist in parameter
        $sql = "UPDATE $tableName SET Artist_Name='$artist->name' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            self::$successMsg = "Record updated successfully";
            header("Location: read.php");
        } else {
            self::$errorMsg = "Error updating record: " . mysqli_error($conn);
        }
    }

    static function deleteArtist($tableName, $conn, $id) {
        // delete an artist by id
        $sql = "DELETE FROM $tableName WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            self::$successMsg = "Record deleted successfully";
            header("Location: read.php");
        } else {
            self::$errorMsg = "Error deleting record: " . mysqli_error($conn);
        }
    }

    public static function artistExists($conn, $artistId) {
        $sql = "SELECT * FROM artist WHERE Artist_id = '$artistId'";
        $result = mysqli_query($conn, $sql);
    
        return mysqli_num_rows($result) > 0;
    }
}

?>
