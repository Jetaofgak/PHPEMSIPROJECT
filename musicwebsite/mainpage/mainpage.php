<?php
session_start();

// Vérifiez si le nom d'utilisateur est défini dans la session
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $loginLink = "<li><a href='#'>Bonjour $username</a></li>";
} else {
    // Redirigez vers la page de connexion si l'utilisateur n'est pas connecté
    $loginLink = "<li><a href='Login Page.html'>Login</a></li>";
}
?>

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fake Spotify
        
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
<nav class="top-nav">
        <div class="logo">
            <img src="./vinyls/mariska.png" alt="logo">
        </div>
        <ul>
            <li><a href="#parag">About us</a></li>
            <?php echo $loginLink; ?>
        </ul>
    </nav>
    <nav class="bottom-nav">
        <form class="search-box">
            <input type="text" id="search-input" name="search-input" placeholder="Search">
            <input type="reset" id="search-btn" name="search-btn" onclick="myfunction1()" value="search">
        </form>
    </nav>

    <nav class="navbar-left">
        <ul>
            <li class="toHover1">Artists
                <ul class="hide1">
                    <li class="toHover1-1">Christopher Larkin
                        <ul class="hide1-1">
                            <li><a href="vinyl1.html">Hornet</a></li>
                            <li><a href="vinyl2.html">Dung Defender</a></li>
                            <li><a href="vinyl3.html">False Knight</a></li>
                            <li><a href="vinyl4.html">Sealed Vessel</a></li>
                        </ul>
                    </li>
                    <li class="toHover1-2">Travis Scott
                        <ul class="hide1-2">
                            <li><a href="wu1.html">Till Further Notice</a></li>
                            <li><a href="wu2.html">Thank God</a></li>
                            <li><a href="wu3.html">Hyaena</a></li>
                            <li><a href="wu4.html">Delresto Echoes</a></li>
                        </ul>
                    </li>
                    <li class="toHover1-3">Nas
                        <ul class="hide1-3">
                            <li><a href="wu1.html">State of Mind</a></li>
                            <li><a href="wu2.html">Michael & Quincy</a></li>
                            <li><a href="wu3.html">Recession Proof</a></li>
                            <li><a href="wu4.html">YKTV</a></li>
                        </ul>
                    </li>
                    <li class="toHover1-4">Vince Staples
                        <ul class="hide1-4">
                            <li><a href="wu1.html">Lift Me Up</a></li>
                            <li><a href="wu2.html">Norf Norf</a></li>
                            <li><a href="wu3.html">3232</a></li>
                            <li><a href="wu4.html">C.N.B</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Playlist Section -->
    <div id="playlist" class="container d-flex justify-content-center my-4 mb-5">
        <!-- Each song container will be added here dynamically -->
    </div>

    <div class="container d-flex justify-content-center my-4 mb-5">
        <div id="mobile-box">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <div class="card-img-top" style="height: 150px;"></div>
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body text-center">
                    <h5 class="h5 font-weight-bold"><a href="#" target="_blank">Dj Flam</a></h5>
                    <p class="mb-0">Urban Bachata remix</p>
                    <audio id="music" preload="true">
                        <source src="" type="audio/mp3">
                    </audio>
                    <div class="audioplayer">
                        <button id="pButton">Play</button>
                        <div id="timeline">
                            <div id="playhead"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Fetch songs from the server
        fetch('GetSongs.php')
            .then(response => response.json())
            .then(songs => {
                populatePlaylist(songs);
            })
            .catch(error => console.error('Error fetching songs:', error));
    });

    function populatePlaylist(songs) {
        var playlistContainer = document.getElementById('playlist');

        songs.forEach(function (song) {
            var songElement = createSongElement(song);
            playlistContainer.appendChild(songElement);
        });
    }

    function createSongElement(song) {
    var songElement = document.createElement('div');
    songElement.className = 'song';

    var playButton = document.createElement('button');
    playButton.textContent = 'Play';
    playButton.addEventListener('click', function () {
        var audioPlayer = document.getElementById('music');

        // Update audio source and play
        audioPlayer.src = song.song_path;
        audioPlayer.play();
    });

    var titleElement = document.createElement('p');
    var AddButton = document.createElement('button');
    AddButton.textContent = 'Add';
    AddButton.addEventListener('click',function(){
        // TO ADD
    })
    titleElement.textContent = 'Title: ' + song.song_name;

        var artistElement = document.createElement('p');
        artistElement.textContent = 'Artist: ' + song.artist_name;

        songElement.appendChild(titleElement);
        songElement.appendChild(artistElement);
        songElement.appendChild(playButton);
        songElement.appendChild(AddButton);
        return songElement;
    }
</script>

</body>

</html>