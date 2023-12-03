<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>

    <header style="background-color: white;">
        <div class="wrapper">
            <a href="./index.php">
                <h1>VITSoln<span class="color">.</span></h1>
            </a>
            <nav>
                <ul>
                    <li><a href="userlogin1.php">User Login</a></li>
                    <li><a href="userreg1.php">User Registration</a></li>
                    <li><a href="adminlogin1.php">ADMIN</a></li>
                </ul>
            </nav>
        </div>
    </header>

</head>

<body style="background-color: #e8e8e8;">
   
    <div id="back" style="margin:0px;"></div>

    <div class="container"
        style="width:700px; margin-top: 70px;height: 350px;left: 50%; transform: translateX(-50%);position:relative; background:white;padding:10px;border-radius:10px;box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
        <div class="heading" style="border-bottom:2px solid #329c92; text-align:center;">
            <h3>Log Into User</h3>
        </div>
        <div class="log" style="margin-top: 20px;">
            <form class="container" action="userlogin2.php" method="POST"><br />
                <input type="text" class="form-control inputForLogin" placeholder="Username"
                    name="username"><br /><br /><br /><br />
                <input class="inputForLogin" type="password" class="form-control inputForLogin" placeholder="Password"
                    name="pass"><br /><br /><br />
                <!-- <input type="checkbox" class="form-check-input" name="chk[]" style="margin-left:5px;">
                <p style="margin-left:25px;">Remember me.</p> -->
                <input type="submit" class="form-control btn btn-primary btnForSubmit" value="Login"><br />
            </form>
            <a href="userreg1.php" class="redirectToSignup">or Signup here</a>

        </div>

    </div>


</body>

</html>