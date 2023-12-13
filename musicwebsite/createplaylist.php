<?php
include_once 'classes/User.php';
include_once 'classes/Playlist.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data
    $userId = $_POST['user_id'];
    $playlistName = $_POST['playlist_name'];

    // Create a new user (assuming it exists, you might want to fetch from a database)
    $user = new User($userId, 'DummyUser');

    // Create a new playlist
    $playlist = new Playlist(uniqid(), $playlistName, $user);
    
    // Redirect to the homepage or perform additional actions
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Playlist</title>
</head>
<body>
    <h1>Create Playlist</h1>
    <form action="create_playlist.php" method="post">
        <label for="user_id">User ID:</label>
        <input type="text" id="user_id" name="user_id" required>
        <br>
        <label for="playlist_name">Playlist Name:</label>
        <input type="text" id="playlist_name" name="playlist_name" required>
        <br>
        <button type="submit">Create Playlist</button>
    </form>
</body>
</html>