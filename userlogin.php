<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
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
    <nav class="navbar-nav navbar-expand-sm bg-dark">
        <div class="nav-item item1" style="margin-left:5%">
            <h2 onclick='window.new("index.php");' style="cursor:pointer">CUI Complaint System</h2>
        </div>
        <div class="nav-item items">
            <a class="nav-link" href="#">User Login</a>
        </div>
        <div class="nav-item items">
            <a class="nav-link" href="userreg1.php">User Registration</a>
        </div>
        <div class="nav-item items">
            <a class="nav-link" href="#">ADMIN</a>
        </div>
    </nav>


</body>

</html>