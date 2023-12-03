<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />

  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Smooch+Sans%3A700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C600%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C600%2C700"/>
  <link rel="stylesheet" href="{{asset('css/login.css')}}"/>
</head>

<body style="background-color: #a872c9 ">

    <div class="loginpage-5XP">
    <div class="auto-group-rkat-48R">
        <img class="rectangle-4-3Pf" src="{{asset('image/rectangle-4.png')}}"/>
        <img class="vector-qKX" src="{{asset('image/vector.png')}}"/>
    </div>

    <!--user name password form-->
    <form>
        <div class="auto-group-c7rm-A6u">
            <p class="login-G9w">Login</p>

            <div class="group-1-8hw">
            <img class="vuesax-linear-sms-1Fw" src="{{asset('image/vuesax-linear-sms.png')}}"/>
            <input type="text" placeholder="Email" name="email" class="input">
            </div>
            <div class="group-2-zdf">
            <img class="frame-tyw" src="{{asset('image/frame.png')}}"/>
            <input type="password" placeholder="Password" name="password" class="input">
            </div>

            <div class="group-10-wBX">
                <button type="submit" class="button">	Log In </button>
            </div>

            <p class="forgot-your-password-C7T"><a href="/forgot">Forgot your password?</a></p>
            <div class="auto-group-vmb1-uGm" >
                <label>
                    <input type="checkbox" checked="checked" name="remember" > <span style="font-size:18px"> Remember me </span>
                </label>

            </div>

            <!--redirect to sign up-->
            <div class="group-7-a1X" >
                <button type="button" class="button2" id="button2"> Sign up</button>
            </div>

            <script type="text/javascript">
                document.getElementById("button2").onclick = function () {
                    location.href = "/register";
                };
            </script>

             <!--redirect to home-->
            <div>
                <button type="button" class="button3" id="button3"> Back to Home</button>
            </div>

            <script type="text/javascript">
                document.getElementById("button3").onclick = function () {
                    location.href = "/";
                };
            </script>

        </div>
    </form>

    <div class="group-4-2u7">
        <p class="or-B1K">OR</p>
        <img class="subtract-Ha9" src="{{asset('image/subtract.png')}}"/>
    </div>
    <img class="vector-ppy" src="{{asset('image/vector.png')}}"/>
    </div>





</body>

</html>
