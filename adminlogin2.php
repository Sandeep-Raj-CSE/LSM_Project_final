<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>Complaint system</title>



    <style>
    input {
        margin: 20px;
    }
    </style>

</head>

<body>


    <nav class="navbar-nav navbar-expand-sm bg-dark">
        <div class="nav-item item1" style="margin-left:5%">
            <h2 onclick='window.open("index.php");' style="cursor:pointer">CUI Complaint System</h2>
        </div>
        <div class="nav-item items">
            <a class="nav-link" href="userlogin1.php">User Login</a>
        </div>
        <div class="nav-item items">
            <a class="nav-link" href="userreg1.php">User Registration</a>
        </div>
        <div class="nav-item items">
            <a class="nav-link" href="adminlogin1.php">ADMIN</a>
        </div>
    </nav>
    <div id="pic" style="float:left;background-size:cover;position :absolute;opacity:0.7">
        <img src="back.jpg" width="100%" height="92%">
    </div>
    <div id="main" class="container" style="position:relative;">


        <div id="forum"
            style="width:80%;margin-left:8%;background:white;margin-top:25px;float:left; border:1px solid #81ecf5;border-radius:10px;box-shadow:2px 3px 5px 2px;">
            <form action="adminlogin.php" method="POST">
                <div style="margin:0%;">
                    <h1 style="text-align:center;border-bottom:2px solid #28a745;padding:12px;border-radius:2px;">
                        Administration</h1>
                </div>
                <div id="text" style="margin-left:5%;margin-right:5%;">
                    <h3 style="background:#3dea2187;border-radius:10px;padding:15px;border:1px solid #28a745;">Incorrect
                        entry !!! Please try again
                        <i class="fa fa-times-circle" style="font-size:24px;float:right;cursor:pointer;"
                            title="Click to close this message."
                            onclick="document.getElementById('text').style.display='none';"></i>
                    </h3>
                </div>

                <div style="margin:5%">
                    <h4>Your Name
                        <input type="text" name="name" placeholder="Enter your name" class="form-control">
                        Password
                        <input type="password" name="passw" placeholder="Enter your Password" class="form-control">
                    </h4>
                    <input type="submit" value="Login" class="btn btn-success"
                        style="padding-left:30%;padding-right:30%;margin-left:20%;">
                </div>
            </form>
        </div>
    </div>
    <div id="foot" style="background-color:grey;height:80px;width:100%;float:left;margin-top:10px;text-align:center;">
        © 2019 Copyright:
        <a href="https://cui.edu.pk/"> cuiwah.edu.pk</a>
    </div>
</body>


</html>