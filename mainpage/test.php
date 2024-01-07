<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['songButton'])) {
    // Retrieve the selected song ID from the button value
    $selectedSongId = intval($_POST['songButton']);
    
    // Store the selected song ID in the session
    $_SESSION['TheSongId'] = $selectedSongId;
}

// Access the global variable
$TheSongId = $_SESSION['TheSongId'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display One Song</title>
</head>
<body>
    <h1>Display One Song</h1>
    <p>Selected Song ID: <?php echo $TheSongId; ?></p>
</body>
</html>