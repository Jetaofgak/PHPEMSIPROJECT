<?php
include_once 'classes/Client.php';
include_once 'classes/Song.php';
include_once 'classes/Playlist.php';
include_once 'classes/Artist.php';
include_once 'classes/connection.php';  // Assuming your connection file is named connection.php

$connection = new Connection();
$connection->selectDatabase('MUSIC_PHP_PROJ');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $UserId = $_POST["UserId"];
    $playlistId = $_POST["PlaylistId"];
    $playlistName = $_POST["playlistName"];

    // Create a new Client instance
    $newPlaylist = new Playlist($UserId,$playlistId,$playlistName);

    // Insert the new client into the database
    $newPlaylist->insertPlaylist('playlist', $connection->conn);

    // Display a success message or redirect the user to another page
    echo "Added successful!";
    if (isset($_POST['addToPlaylist']) && isset($_POST['songId'])) {
        $songIdToAdd = $_POST['songId'];
    
        // Add your logic to add the song to the playlist using $songIdToAdd
        // You may use this ID to perform database operations or any other necessary actions
    
        // Redirect back to the main page after adding to the playlist
        header("Location: mainpage.php");
        exit();
}
}
?>