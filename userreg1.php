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
    <div class="container"
        style="width:900px; margin-top: 20px;height: 580px;left: 50%; transform: translateX(-50%);position:relative; background:white;padding:10px;border-radius:10px;box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
        <h3>User Registration</h3>
        <form class="forumm" method="post" id="reg" action="userreg2.php">
            <!-- <div id="span">First Name</div> -->
            <input class="form-control inputForLogin" type="text" id="fname" name="fname" placeholder="Enter firstname">
            <!-- <p id="chkfname">*Fill First Name</p> -->
            <br /><br /><br />
            <!-- <div id="span">Last Name</div> -->
            <input class="form-control inputForLogin" type="text" id="lname" name="lname" placeholder="Enter lastname">
            <!-- <p id="chklname">*Fill Last Name</p> -->
            <br /><br /><br />
            <!-- <div id="span">Username</div> -->
            <input class="form-control inputForLogin" type="text" id="uname" name="username"
                placeholder="Enter username">
            <!-- <p id="chkuser" style="color:red;display:none;">*Fill user Name</p> -->
            <br /><br /><br />
            <!-- <div id="span">Email</div> -->
            <input name="email" class="form-control inputForLogin" type="email" id="mail" placeholder="Enter email">
            <!-- <p id="chkmail">*Fill Email</p> -->
            <br /><br /><br />
            <!-- <div id="span">Phone Number</div> -->
            <input class="form-control inputForLogin" type="text" id="pn" name="phone" placeholder="Enter phone">
            <!-- <p id="chkpn">*Fill phone nubmer</p> -->
            <br /><br /><br />
            <div id="span" style="margin-left: 170px; font-size: 20px; margin-bottom: 10px;">Gender</div>
            <select style="width:40%;display:inline-block; margin-left: 170px; height: 30px; border-radius: 10px;"
                class="form-control" name="gender">
                <option>Male</option>
                <option>Female</option>
            </select>
            <br /><br />
            <!-- <div id="span">Password</div> -->
            <input class="form-control inputForLogin" type="password" id="pass"
                placeholder="Enter password"><br /><br /><br />
            <!-- <div id="span">Confirm Password</div> -->
            <input name="pass" class="form-control inputForLogin" type="text" id="cpass"
                placeholder="Re-enter password">
            <!-- <p id="match">Password matched.</p> -->
            <br /><br />
            <input class="btnForSubmit" name="btn" type="submit" value="SIGNUP" style="margin-right: 100px;"></button>
        </form>

        <a class="btn btn-light redirectToSignup" href="userlogin1.php"
            style="margin-left: 100px; padding-top: 15px;">Already SignUP!
            Login here</a>
        <br />
    </div>
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
</body>

</html>