<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome</title>
        <link rel="stylesheet" href="{{asset('css/index.css')}}"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Baskervville&family=DM+Sans:opsz,wght@9..40,300&family=Ibarra+Real+Nova:wght@600&family=Inter:wght@800&display=swap"
            rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <!--Wrapper is the 12-grid system we used-->

        <!--University logos-->
        <header>
            <div class="wrapper">
                <a href="#">
                    <img src="{{asset('image/indexpage/logo_copy.png')}}" alt="UOR main logo" width="544px" height="72px" style="position: absolute;               
                    top: 15px;contain: no-repeat;" />
                </a>
                <a href="#">
                    <img src="{{asset('image/indexpage/FOS logo.png')}}" alt="FOS logo" width="489px" height="167px" style="position: absolute; right: 100px;top: -6px; display: 
                    flex;flex-direction: column" />
                </a>

            </div>

        </header>
        <!--Navigation bar-->
        <nav>
            <div class="wrapper">
                <div class="navbar">
                    <div class="menu-item">
                        <a href="#">Home</a>
                        <a href="#">News and Events</a>
                        <a href="#">Sevices</a>
                        <a href="#">About</a>
                        <a href="#">Alumni Dirctory</a>
                        <a href="#">Contact us</a>
                        <a href="#">Login</a>
                        <a href="#">Signup</a>
                    </div>
                </div>

            </div>
        </nav>

        <main class="hero-section">
            <div class="wrapper">
                <!--Main images with slidshows-->
                <div class="mainimage" style="position: absolute;top: 166px;">
                    <img src="{{asset('image/indexpage/Main Image.png')}}" class="img-fluid" alt="Slide show">
                    <h2>Science ALumni<br>Welcome</h2>
                </div>
                     
            </div>
        </main>

        <!--Learn more part with about us-->
        <div class="about">
            <div class="wrapper">
                <div class="aboutustext">
                    <p>Welcome to the Alumni Association of Faculty of Science</p>               
                </div>
                <div class="btnbox1">
                    <a class="btn btn-primary" href="#" role="button">Learn More</a>
                </div>
            </div>
      
        </div>

        <!--Join with us part-->
        <div class="join">
            <div class="wrapper">
                <div class="join_left">
                    <div class="parabox">
                        <p>This isn't a good bye.<br>Its a welcome</p>
                    </div>
                    <div class="btnbox">
                        <a class="btn btn-primary" href="#" role="button">Join with us</a>
                    </div>
                </div>

                <div class="join_right">
                    <!--add imagge here-->
                    <div class="img_box">
                        <img src="{{asset('image/indexpage/graduwation photo.png')}}" class="img-fluid" alt="graduwationphoto" />
                    </div>

                </div>
              </div>
              <div class="frame-34-hRB">
                <img class="facebook-black1-bFf" src="./assets/facebook-black1-AeD.png"/>
                <img class="twitter-black1-92H" src="./assets/twitter-black1-MA9.png"/>
                <img class="linkedin-black1-HPP" src="./assets/linkedin-black1-znV.png"/>
                <img class="youtube-color1-osX" src="./assets/youtube-color1-Bjf.png"/>
                <img class="instagram-black1-9Ah" src="./assets/instagram-black1-UMF.png"/>
                <img class="googleplus-black1-6Lq" src="./assets/googleplus-black1-PKo.png"/>
              </div>
            </div>


        <footer class="footstyle">
            <div class="wrapper">
                <p>Hello world</p>

            </div>

        </footer>

        <script type="module" src="welcome.js"></script>

    </body>

</html>