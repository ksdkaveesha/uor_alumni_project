<!DOCTYPE html>
<html>
<head>
    <title>Alumni-FOS Verify your account</title>
</head>

<body>

    <p style="font-size: 12px">
        Dear {{ $user }},<br>
        Please use the following One Time Password(OTP) to access the form:######.Do not share this OTP with anyone.
        This code will expire in 1 minutes.
        Link to http://127.0.0.1:8000/pwdchange <br>
        Thank you. Best Regards!
    </p><br>

    <p><?php echo "Please Don't reply to this email"; ?></p>

</body>

</html>