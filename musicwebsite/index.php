<?php
include_once 'classes/User.php';
include_once 'classes/Song.php';
include_once 'classes/Album.php';
include_once 'classes/Playlist.php';
include_once 'classes/Artist.php';

// Create users
$user1 = new User('1', 'User1');
$user2 = new User('2', 'User2');

// Create songs
$song1 = new Song('1', 'Song1', 'Artist1', 200);
$song2 = new Song('2', 'Song2', 'Artist2', 180);

// Create albums
$album1 = new Album('1', 'Album1', 'Artist1', 2022);
$album2 = new Album('2', 'Album2', 'Artist2', 2020);

// Create playlists
$playlist1 = new Playlist('1', 'Playlist1', $user1);
$playlist2 = new Playlist('2', 'Playlist2', $user2);

// Create artists
$artist1 = new Artist('1', 'Artist1');
$artist2 = new Artist('2', 'Artist2');

// Associate entities
$user1->addPlaylist($playlist1);
$user2->addPlaylist($playlist2);

$playlist1->addSong($song1);
$playlist2->addSong($song2);

$artist1->addAlbum($album1);
$artist2->addAlbum($album2);

// Display information (you'd typically use a template engine for this in a real project)
echo "User: {$user1->getUsername()}\n";
echo "Playlist: {$playlist1->getName()}\n";
echo "Songs in Playlist:\n";
foreach ($playlist1->getSongs() as $song) {
    echo "- {$song->getTitle()} by {$song->getArtist()}\n";
}

echo "\nArtist: {$artist1->getName()}\n";
echo "Albums by Artist:\n";
foreach ($artist1->getAlbums() as $album) {
    echo "- {$album->getTitle()} ({$album->getReleaseYear()})\n";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="#" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>