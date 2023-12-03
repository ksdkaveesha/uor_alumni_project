<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Simple Forgot Password Page Using HTML and CSS">
	<meta name="keywords" content="forgot password page, basic html and css">
    <link rel="stylesheet" href="{{asset('css/forgot_pwd.css')}}"/>
    <!--Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Forgot Password Page</title>
</head>
<body style="background-color: #fcf3d2" class="img-fluid">
	<div class="row">
        <img src="{{asset('image/forgot_pw/uni-logo2.png')}}" width="50%" >
		<h1>Forgot Password</h1>
		<h6 class="information-text">Enter your registered email to reset your password.</h6>
		<div class="form-group">
			<input type="email" name="user_email" id="user_email">
			<p><label for="username">Email</label></p>
			<button onclick="con_msg()" >Reset Password</button>
            <button onclick="back()" >Go Back</button>
		</div>
        <div ><p id="msg" style="color: red"> </p></div>

	</div>

    <script>
        function con_msg() {
          document.getElementById("msg").innerHTML = "*Check your email";
        }
    </script>

    <script>
        function back() {
            location.href = "/login";
        }
    </script>
</body>

</html>
