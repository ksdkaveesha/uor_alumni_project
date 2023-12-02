<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Simple Forgot Password Page Using HTML and CSS">
	<meta name="keywords" content="forgot password page, basic html and css">
    <link rel="stylesheet" href="{{asset('css/forgot_pwd.css')}}"/>
	<title>Forgot Password Page</title>
</head>
<body>
	<div class="row">
		<h1>Forgot Password</h1>
		<h6 class="information-text">Enter your registered email to reset your password.</h6>
		<div class="form-group">
			<input type="email" name="user_email" id="user_email">
			<p><label for="username">Email</label></p>
			<button onclick="con_msg()" >Reset Password</button>
		</div>
        <div ><p id="msg" style="color: red"> </p></div>

	</div>

    <script>
        function con_msg() {
          document.getElementById("msg").innerHTML = "*Check your email";
        }
        </script>
</body>

</html>
