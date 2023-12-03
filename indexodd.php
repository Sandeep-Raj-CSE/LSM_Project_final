<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./style.css">
    <title>Welcome to complaint system</title>

    <script>
    function myfun() {
        var guidebutton = document.getElementById("butn");
        var guidelines = document.getElementById('guidelines');
        if (guidebutton.value == "Click to see guidelines") {

            guidelines.style.display = 'block';
            guidebutton.value = 'Click to Hide guidelines';
        } else if (guidebutton.value == "Click to Hide guidelines") {

            guidelines.style.display = 'none';
            guidebutton.value = 'Click to see guidelines';
        }
    }
    </script>

</head>

<body>
    <nav class="bg-dark heading">
        <div class="nav-item item1" style="margin-left:5%">
            <h2 onclick='window.location.reload();' style="cursor:pointer">VIT Complaint System</h2>
        </div>
        <div style="display: flex; width: 400px;">
            <div class="nav-item items">
                <a class="nav-link" href="userlogin1.php">User Login</a>
            </div>
            <div class="nav-item items">
                <a class="nav-link" href="userreg1.php">User Registration</a>
            </div>
            <div class="nav-item items">
                <a class="nav-link" href="adminlogin1.php">ADMIN</a>
            </div>
        </div>
    </nav>
    <!---------------------------------------------------------------------------------------------------------------------->
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner slider_homepage">
            <div class="carousel-item active">
                <img src="slide1.jpg" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="slide2.jpg" alt="Chicago" width="1100" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!--------------------------------------------------------------------------------------------------------------------------------->

    <div class="welcome container">
        <h3>Welcome To Online Complaint System</h3>


        <div class="guide">

            <input type="button" class="btn btn-light form-control" onClick="myfun()" id="butn"
                value="Click to see guidelines" ">
		
			<div id=" guidelines" style="display:none">
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-dark">
                    If you want to place complaint first of all register yourself in <a href="userreg1.php">User
                        registration</a>
                </li>
                <li class="list-group-item list-group-item-dark">
                    After registration Login in to <a href="userlogin1.php">User Login</a>
                </li>
                <li class="list-group-item list-group-item-dark">
                    Then set your personal information. And in complaint section select type and sub type of complaint.
                </li>
                <li class="list-group-item list-group-item-dark">
                    After writing your complaint submit your complaint and wait for response on it.
                </li>
                <li class="list-group-item list-group-item-dark">
                    You can see your complaint status on your dashboard.
                </li>
                <li class="list-group-item list-group-item-dark">
                    If you want to logout there is Logout button at Top-right corner.
                </li>
            </ul>
        </div>
    </div>
    </div>
    <br />
    <hr />
    <div class="copyright">
        <div class="footer-copyright text-center py-3">
            © 2019 Copyright:
            <a href="https://cui.edu.pk/"> cuiwah.edu.pk</a>
        </div>
    </div>
</body>

</html>