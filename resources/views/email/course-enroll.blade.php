<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Congratulation Mr./Ms. {{$data['name']}}, Your Course registration successfully Complete</h3>
    <h4>Your login Credential is given Bellow : </h4>
    <p>User Email : {{$data['user_email']}}</p>
    <p>Your Temporary Password : {{$data['password']}}</p>
    <p>Please login your Account and update your Password and Other Details:- <a href="https://portfolio1.shakhawath.xyz/login-register">https://portfolio1.shakhawath.xyz/login-register</a></p>

    <p>Thank You</p>
</body>
</html>
