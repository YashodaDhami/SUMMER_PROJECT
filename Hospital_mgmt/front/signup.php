<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url("http://localhost/hospital_mgmt/img/pic1.jpg");
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
        <h2> &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSignUp

        </h2>

        <div class="textbox">
            <p1>Username:&nbsp&nbsp&nbsp</p1>

            <input type="text" name="Username">
        </div><br>
        <div class="password">
            <p1>Password:&nbsp&nbsp&nbsp&nbsp</p1>
            <input type="password" name="password">
        </div><br>
        <div class="Address">
            <p1>Address:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p1>
            <input type="text" name="address">
        </div><br>
        <div class="Email">
            <p1>Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p1>
            <input type="text" name="email">
        </div><br>
        <div class="Contact No">
            <p1>Contact No:&nbsp</p1>
            <input type="text" name="contact">
        </div>
        <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp<a href="http://localhost/hospital_mgmt/front/login.php"><input type="button" class="button" value="Back"></a>
        <input type="button" class="button" value="SignUp">
    </div>
</body>

</html>