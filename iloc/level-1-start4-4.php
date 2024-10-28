<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bigkas | Ilocano [Level 1]</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <!-- Navigation Menu -->
        <nav class="navbar navbar-expand-lg sticky-md-top" style="background-color: #619CFF;">
            <div class="container container-sm text-center">
                <a class="navbar-brand" href="../dialect-selection.php">
                    <img src="../assets/Image Files/logo.png" alt="Bigkas" width="200" height="100%">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-6 col-md-2">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="../assets/Image Files/fire.png" style="width: 50px; height: auto;">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="../assets/Image Files/coin.png" style="width: 50px; height: auto;">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="../assets/Image Files/profile.png" style="width: 50px; height: auto;">
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="container-fluid" style="background-image: url('../assets/Image Files/bg1.png'); background-size: cover; background-attachment: fixed; padding-top: 85px !important; padding-bottom: 85px !important;">
            <div class="row">
                <div class="col"> 
                    <div class="container">
                        <div class="mb-3 row">
                            <div class="col col-md-3">
                                <div class="mb-3 row">
                                    <div class="col">
                                        <a type="button" class="btn btn-primary btn-lg" style="border-color:#619CFF; border-width: 3px; border-radius: 25px; width: 250px;" href="learn-iloc.php">Home</a>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col">
                                        <a type="button" class="btn btn-warning btn-lg" style="border-color:#619CFF; border-width: 3px; border-radius: 25px; width: 250px;"href="level-1-solution4.php">Check</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-9" style="background-image: url('../assets/Image Files/luneta.png'); background-attachment:inherit; background-size: 300px; background-repeat: no-repeat; background-position: right bottom; padding-left: 55px; padding-right: 55px;">
                                <h2>Select the words that matches.</h2>
                                <div class="overflow-auto" style="height: 600px; width: 100%;">
                                    <div class="row mx-auto">
                                        <div class="col">
                                            <div class="row mb-3">
                                                <div class="col-sm-6">
                                                    <img src="../assets/Image Files/speaker.png" style="height: 350px;">                                                    
                                                </div>
                                                <div class="col-sm-6 text-center" style="background-image: url('../assets/Image Files/bubble.png'); background-repeat: no-repeat; background-size: contain; background-position: left; padding-top: 150px;">
                                                    <p style="font-size: xx-large; font-family: 'Courier New', Courier, monospace; line-height: 1.5rem;"><strong><br>Good</strong></p>
                                                </div>
                                            </div>
                                            <div class="row mb-3 text-center" style="font-family: 'Courier New', Courier, monospace;">
                                                <div class="col-sm-2">
                                                    <a type="button" class="btn" style="font-size: x-large;" onclick="mo()"href="level-1-start4-1.php">
                                                        <audio id="mo" src="../assets/Audio Files/mo.m4a"></audio>
                                                        <strong>mo</strong>
                                                    </a>
                                                </div>
                                                <div class="col-sm-2">
                                                    <a type="button" class="btn" style="font-size: x-large;" onclick="kan()"href="level-1-start4-2.php">
                                                        <audio id="kan" src="../assets/Audio Files/kan.m4a"></audio>
                                                        <strong>kan</strong>
                                                    </a>
                                                </div>
                                                <div class="col-sm-2">
                                                    <a type="button" class="btn" style="font-size: x-large;" onclick="bigat()"href="level-1-start4-3.php">
                                                        <audio id="bigat" src="../assets/Audio Files/bigat.m4a"></audio>
                                                        <strong>Bigat</strong>
                                                    </a>
                                                </div>
                                                <div class="col-sm-2">
                                                    <a type="button" class="btn" style="border-color:#619CFF; border-width:3px;font-size: x-large;" onclick="naimbag()">
                                                        <audio id="naimbag" src="../assets/Audio Files/naimbag.m4a"></audio>
                                                        <strong>Naimbag</strong>
                                                    </a>
                                                </div>
                                                <div class="col-sm-2">
                                                    <a type="button" class="btn" style="font-size: x-large;" onclick="maria()"href="level-1-start4-5.php">
                                                        <audio id="maria" src="../assets/Audio Files/maria.mp3"></audio>
                                                        <strong>Maria</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <Footer>
            <div class="container-fluid" style="background-color: #232323; background-size: cover; padding-top: 10px; padding-bottom: 10px;">
                <div class="mb-3 row">
                    <div class="col">
                        <div class="container">
                            <div class="row">
                                <div class="col col-md-3">
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="padding-top: 15px; padding-bottom: 15px;">
                                    <div class="row">
                                        <div class="col-6">
                                            
                                        </div>
                                        <div class="col-6">
                                            
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col">
                                            <p class="text-muted">All Rights Reserved © 2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Footer>

        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <!-- Other -->
        <script>
            let mo = function(){document.getElementById("mo").play()}
            let kan = function(){document.getElementById("kan").play()}
            let bigat = function(){document.getElementById("bigat").play()}
            let naimbag = function(){document.getElementById("naimbag").play()}
            let maria = function(){document.getElementById("maria").play()}
        </script>
    </body>
</html>