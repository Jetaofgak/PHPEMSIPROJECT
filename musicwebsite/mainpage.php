<!DOCTYPE html>
<head>
    <title>Vinyls Site</title>
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
        <li><a href="Login Page.html">Login</a></li>
    </ul>
    </nav>
    <nav class="bottom-nav">
        <form class="search-box">
            <input type="text" id="search-input" name="search-input" placeholder="Search">
            <input type="reset" id="search-btn" name="search-btn" onclick="myfunction1()" value="search" >
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
                            <li><a href="vinyl4.html">Sealed Vessel</a><li>
                    </ul>
                </li>
                <li class="toHover1-2">Travis scott
                    <ul class="hide1-2">
                        <li><a href="wu1.html">Till Further Notice</a></li>
                        <li><a href="wu2.html">Thank God</a></li>
                        <li><a href="wu3.html">Hyaena</a></li>
                        <li><a href="wu3.html">Delresto Echoes</a></li>
                        
                    </ul>
                </li>
                <li class="toHover1-3">Nas
                    <ul class="hide1-3">
                        <li><a href="wu1.html">State of Mind</a></li>
                        <li><a href="wu2.html">Micheal & Quincy</a></li>
                        <li><a href="wu3.html">Recession Proof</a></li>
                        <li><a href="wu3.html">YKTV</a></li>
                        
                    </ul>
                </li>
                <li class="toHover1-4">Vince Staples
                    <ul class="hide1-4">
                        <li><a href="wu1.html">lift me up</a></li>
                        <li><a href="wu2.html">norf norf</a></li>
                        <li><a href="wu3.html">3232 </a></li>
                        <li><a href="wu3.html">C.N.B</a></li>
                        
                    </ul>
                </li>
            </ul>
        </li>


        
            
        </ul>
    </nav>

    <section class="content">
            <div class="title">
                <h1 class="header">A Tribe Called Quest</h1>
            </div>
            <div class="tcq">
            <a href="vinyl1.html"><img class="product" src="./vinyls/vinyl1.jpg"></img></a>
            <a href="vinyl2.html"><img class="product" src='./vinyls/vinyl2.jpg'></img></a>
            <a href="vinyl3.html"><img class="product" src="./vinyls/vinyl3.jpg"></img></a>
            <a href="vinyl4.html"><img class="product" src="./vinyls/vinyl4.jpg"></img></a>
            <a href="vinyl5.html"><img class="product" src="./vinyls/vinyl5.jpg"></img></a>
            </div>
    </section>
    <section class="content">
        <div class="title">
            <h1 class="header">wu tang clan</h1>
        </div>
        <div class="tcq">
        <a href="wu1.html"><img class="product" src="./vinyls/wu1.jpg"></img></a>
        <a href="wu2.html"><img class="product" src='./vinyls/wu2.png'></img></a>
        <a href="wu3.html"><img class="product" src="./vinyls/wu3.jpeg"></img></a>
        <a href="wu4.html"><img class="product" src="./vinyls/wu4.jpeg"></img></a>
        <a href="wu5.html"><img class="product" src="./vinyls/wu5.jpeg"></img></a>
        </div>
</section>
    <footer class="footer" id="parag">
        <div class="logos">
            <img src="./vinyls/logos.png" >
        </div>
    </footer>
    <div class="container d-flex justify-content-center my-4 mb-5">
        <div id="mobile-box">
            <!-- Card -->
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <!-- Remove the image and replace it with an empty div -->
                    <div class="card-img-top" style="height: 150px;"></div>
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body text-center">
                    <h5 class="h5 font-weight-bold"><a href="#" target="_blank">Dj Flam</a></h5>
                    <p class="mb-0">Urban Bachata remix</p>
                    <!-- Replace 'your-audio-file.mp3' with the actual URL or path of your audio file -->
                    <audio id="music" preload="true">
                        <source src="./vinyls/kostas.mp3" type="audio/mp3">
                        <!-- You can add additional source elements for different audio formats -->
                    </audio>
                    <div id="audioplayer">
                        <i id="pButton" class="fas fa-play"></i>
                        <div id="timeline">
                            <div id="playhead"></div>
                        </div>
                    </div>
    
                    <!-- Music Player Integration -->
                    <div id="music-player">
                        <h1>Music Player</h1>
                        <audio id="audio" controls>
                            <source src="./vinyls/kostas.mp3" type="audio/mp3">
                            <!-- You can add additional source elements for different audio formats -->
                            Your browser does not support the audio tag.
                        </audio>
                    </div>
                    <!-- End Music Player Integration -->
    
                </div>
            </div>
            <!-- Card -->
        </div>
    </div>
    
    
</body>
</html>
