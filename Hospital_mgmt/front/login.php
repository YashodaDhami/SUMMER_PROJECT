<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url("http://localhost/hospital_mgmt/img/pic.jpeg");
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-size: 100%;
        }

        .login {
            width: 280px;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div class="login">
        <h4>&nbsp&nbsp&nbspHEALTH POST MANAGENMENT
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSYSTEM
        </h4>

        <div class="textbox">
            <p1>Username:</p1>

            <input type="text" name="Username">
        </div><br>
        <div class="password">
            <p1>Password:</p1>
            <input type="password" name="password">
        </div>

        <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp <a href="http://localhost/Hospital_mgmt/front/signup.php"><input type="button" class="button" value="SignUp"></a>
        <a href="http://localhost/Hospital_mgmt/front/dashboard.php"><input type="button" class="button" value="login"><a>

    </div>
</body>

</html>