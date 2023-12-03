<?php
$uname=trim($_POST["username"]);
$fname=trim($_POST["fname"]);
$lname=trim($_POST["lname"]);
$mail=trim($_POST["email"]);
$ph=trim($_POST["phone"]);
$gender=trim($_POST["gender"]);
$passw=trim($_POST["pass"]);
$date= date("F j, Y, g:i a"); 

$servername='localhost';
$username='root';
$password='';
$dbname='project';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	
	$query1="SELECT * FROM `userregistration`";
	$result=mysqli_query($conn,$query1);
	
	if(mysqli_query($conn,$query1))
	{
		$check=0;
		while($row=mysqli_fetch_assoc($result))
		{
			$name=$row['username'];
			if($uname==$name)
			{
				$check=1;
			}
		}
		if($check==0)
		{
			$query="INSERT INTO `userregistration`( `username`,`fname`, `lname`, `email`, `phone`, `gender`, `pass`, `date`) VALUES ('$uname','$fname','$lname','$mail','$ph','$gender','$passw','$date')";
			$chk=mysqli_query($conn,$query);
	
				if($chk)
				{
					$msg="<h5 style='padding:10px'>Sign Up Successfully!! Now you can <a href='userlogin1.php'>Login here</a>
					<i style='font-size:24px ;color:red;float:right' class='fa'>&#xf046;</i></h5>";
				}
				else
				{
					echo "not entered";
				}
			
		}
		else if($check==1)
		{
			function generateRandomString($length = 4) {
				return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
			}
			
			
			
		$newname=  generateRandomString();
			$newname=$uname.$newname;
			$newname2=$uname.generateRandomString();
			$newname3=$uname.generateRandomString();
			$newname4=$uname.generateRandomString();
			$newname5=$uname.generateRandomString();
		
		
			
				$msg="<h4>User name ($uname) already exist .Please <a href='userreg1.php'> try again </a>with different.</h4><br />
				<br /><ol class='list-group list-group-flush'><li class='list-group-item list-group-item-light'>You can try $newname </li><li class='list-group-item list-group-item-light'>
				You can try $newname2</li><li class='list-group-item list-group-item-light'>You can try $newname3 </li>
				<li class='list-group-item list-group-item-light'>You can try $newname4 </li>
				<li class='list-group-item list-group-item-light'>You can try $newname5<hr /></li></ol>";
		}
	}
	else
	{
		echo "not checked";
	}
}
else
{
	echo"connection not established";
}
?>
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
    
    <div class="container" style="margin:0 auto;width:60% ; margin-top:100px" >

        <h6><?php echo $msg;?></h6>
    </div>

</html>