<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>Welcome to complaint system</title>

    <style>
    input[type=checkbox] {
        /* Double-sized Checkboxes */
        -ms-transform: scale(1.3);
        /* IE */
        -moz-transform: scale(1.3);
        /* FF */
        -webkit-transform: scale(1.3);
        /* Safari and Chrome */
        -o-transform: scale(1.3);
        /* Opera */
        transform: scale(1.3);
        padding: 5px;
    }

    #back {
        margin: 0px;
        width: 100%;
        height: 100%;
        background: #87b1de;
        position: absolute;
        background-size: cover;
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
    <div id="back" style="margin:0px;"></div>
    <div class="container"
        style="width:70%;marin-left:15%;position:relative; background:white;margin-top:20px;padding:10px;border-radius:10px;border:.5px solid black;box-shadow:1px 2px 3px 0px;">
        <div class="heading" style="border-bottom:2px solid #329c92; text-align:center;">
            <h3>Log Into User</h3>
        </div>
        <div class="log">
            <form class="container" action="userlogin2.php" method="POST"><br />
                <h4 id="errormsg" class="list-group-item list-group-item-dark" style="color:red;border-radius:8px">
                    Invalid Username/Password !!!Please try again.
                    <i class="fa fa-times-circle" style="font-size:24px;float:right;cursor:pointer;"
                        onclick="hide()"></i>
                </h4><br />
                <input type="text" class="form-control" placeholder="Username" name="username"><br />
                <input type="password" class="form-control" placeholder="Password" name="pass"><br />
                <input type="checkbox" class="form-check-input" name="chk[]" style="margin-left:5px;">
                <p style="margin-left:25px;">Remember me.</p>
                <input type="submit" class="form-control btn btn-primary" value="Login"><br />
            </form>
            <a href="userreg1.php">or Signup here</a>
            <hr />
            <form>
                <a href="index.php" class="form-control btn btn-light" style="width:auto"> Cancel</a>
                <input type="submit" style="width:auto;" class="form-control btn btn-light"
                    value="Forget Password"><br />
            </form>
        </div>

    </div>

    <script>
    function hide() {
        document.getElementById("errormsg").style.display = 'none';
    }
    </script>
</body>

</html>