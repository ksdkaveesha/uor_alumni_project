<!DOCTYPE html>
<html >

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
                <div class="w3-content w3-section" style="max-width:100%; padding: 0px;">
                    <img class="mySlides " src="main Image.png" style="width:100%">
                    <img class="mySlides " src="b2.jpg" style="width:100%">
                    <img class="mySlides " src="b3.jpg" style="width:100%">



                <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
              </div>

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

              <script>
                  var myIndex = 0;
                  carousel();

                  var slideIndex = 1;
                  showDivs(slideIndex);

                  function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                      x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}
                    x[myIndex-1].style.display = "block";
                    setTimeout(carousel, 3000); // Change image every 2 seconds
                  }

                  function plusDivs(n) {
                    showDivs(slideIndex += n);
                  }

                  function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    if (n > x.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = x.length}
                    for (i = 0; i < x.length; i++) {
                      x[i].style.display = "none";
                    }
                    x[slideIndex-1].style.display = "block";
                  }

                  $(".flexnav").flexNav(); /*nevigation bar*/
                </script>
                <!--
                <div class="mainimage" style="position: absolute;top: 166px;">
                    <img src="{{asset('image/indexpage/Main Image.png')}}" class="img-fluid" alt="Slide show">
                    <h2>Science ALumni<br>Welcome</h2>
                </div>
            -->
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

        </div>

        <footer class="footstyle">
            <div class="wrapper">

                <div class="set_left">
                    <!--add imagge here-->
                    <div class="img_box">
                        <br><br><br>
                        <img src="{{asset('image\indexpage\FOSalumni.png')}}" class="img-fluid" alt="FOSalumni" />
                    </div>
                    <div class="text-fluid">
                        <br><br>
                        <a>&nbsp&nbsp&nbsp&nbsp ABOUT US </a>
                        <a>&nbsp&nbsp&nbsp&nbsp CONTACT US</a>
                        <a>&nbsp&nbsp&nbsp&nbsp HELP</a>
                        <a>&nbsp&nbsp&nbsp&nbsp PRIVANCY POLICY </a>
                    </div>

                    <div class="img-fluid2">
                        <br><br>
                        <img src="{{asset('image\index\location.png')}}" class="iconf"/><span>&nbsp Faculty of Science, University of Ruhuna, Matara</span><br><br>
                        <img src="{{asset('image\index\phone.png')}}" class="iconf"/><span>&nbsp 041-1111111</span><br><br>
                        <img src="{{asset('image\index\fax.png')}}" class="iconf"/><span>&nbsp 041-1111111</span><br><br>
                        <img src="{{asset('image\indexpage\gmail.png')}}" class="iconf"/><span>&nbsp a@gmail.com</span><br><br>
                        <img src="{{asset('image\index\facebook.png')}}" class="iconf"/><span>&nbsp</span>
                        <img src="{{asset('image\index\twitter.png')}}" class="iconf"/><span>&nbsp</span>
                        <img src="{{asset('image\index\linkedin.png')}}" class="iconf"/><span>&nbsp</span>
                        <img src="{{asset('image\index\google.png')}}" class="iconf"/><span>&nbsp</span>
                        <img src="{{asset('image\index\youtube.png')}}" class="iconf"/><span>&nbsp</span>
                        <img src="{{asset('image\index\instagram.png')}}" class="iconf"/><span>&nbsp</span>
                        <br><br>
                    <div class="copy-right">
                        <span> Copy right &copy 2023.University of Ruhuna </span>
                        <br><br>
                    </div>
                    </div>

                </div>
            </div>

        </footer>

        <script type="module" src="welcome.js"></script>

    </body>

</html>
