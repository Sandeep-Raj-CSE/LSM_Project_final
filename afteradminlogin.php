<?php

$servername='localhost';
$username='root';
$password='';
$dbname='project';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	$query1="SELECT * FROM `complaints`";
	$result=mysqli_query($conn,$query1);
	$pend=0;
	$full=0;
	if($result)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			
				$cme=$row['pending'];
				if($cme=='1')
				{
					$pend++;
				}
			
		}
	}
	$full+=$pend;
	$query1="SELECT * FROM `completedcomp`";
	$result=mysqli_query($conn,$query1);
	$compl=0;
	if($result)
	{
		while($row=mysqli_fetch_assoc($result))
		{
					$full++;
					$compl++;	
			
		}
	}
	$query1="SELECT * FROM `inprogressomp`";
	$result=mysqli_query($conn,$query1);
	$inpro=0;
	if($result)
	{
		while($row=mysqli_fetch_assoc($result))
		{
				
					$inpro++;	
					$full++;
			
		}
	}
}
?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="main.css"> -->
    <title>Complaint system</title>





    <script>
    function callsh() {
        if (document.getElementById("sh_menu").style.display == 'block') {
            document.getElementById("sh_menu").style.display = 'none';
        } else {
            document.getElementById("sh_menu").style.display = 'block';
        }
    }

    function comp() {
        var p = document.getElementById("p_comp");
        var f = document.getElementById("f_comp");
        var i = document.getElementById("i_comp");
        if (document.getElementById('ccomp').style.display == 'block') {
            p.style.display = 'none';
            document.getElementById('ccomp').style.display = 'none';
            f.style.display = 'none';
            i.style.display = 'none';

        } else {
            p.style.display = 'block';
            document.getElementById('ccomp').style.display = 'block';
            f.style.display = 'block';
            i.style.display = 'block';

        }
    }

    function manageuser() {
        var l = document.getElementById("l_user");
        if (l.style.display == 'none') {
            l.style.display = 'block';
            document.getElementById('a_user').style.display = 'block';
        } else {
            l.style.display = 'none';
            document.getElementById('a_user').style.display = 'none';

        }
    }

    function dashboard() {
        var dash = document.getElementById('dashboard');
        var luser = document.getElementById('logindata');
        var auser = document.getElementById('alluser');
        var full = document.getElementById('fullhistory');
        var inpro = document.getElementById('inprocomp');
        var comp = document.getElementById('complcomp');
        var pend = document.getElementById('pending');
        if (dash.style.display == 'block') {
            luser.style.display = 'none';
            auser.style.display = 'none';
            full.style.display = 'none';
            inpro.style.display = 'none';
            comp.style.display = 'none';
            pend.style.display = 'none';
        } else {
            dash.style.display = 'block';
            luser.style.display = 'none';
            auser.style.display = 'none';
            full.style.display = 'none';
            inpro.style.display = 'none';
            comp.style.display = 'none';
            pend.style.display = 'none';
        }
    }

    function pending() {
        var pend = document.getElementById('pending');
        var dash = document.getElementById('dashboard');
        var luser = document.getElementById('logindata');
        var auser = document.getElementById('alluser');
        var full = document.getElementById('fullhistory');
        var inpro = document.getElementById('inprocomp');
        var comp = document.getElementById('complcomp');
        if (pend.style.display == 'block') {
            dash.style.display = 'none';
            luser.style.display = 'none';
            auser.style.display = 'none';
            full.style.display = 'none';
            inpro.style.display = 'none';
            comp.style.display = 'none';
        } else {

            pend.style.display = 'block';
            dash.style.display = 'none';
            luser.style.display = 'none';
            auser.style.display = 'none';
            full.style.display = 'none';
            inpro.style.display = 'none';
            comp.style.display = 'none';
        }

    }

    function complcomp() {
        var comp = document.getElementById('complcomp');
        var pend = document.getElementById('pending');
        var dash = document.getElementById('dashboard');
        var luser = document.getElementById('logindata');
        var auser = document.getElementById('alluser');
        var full = document.getElementById('fullhistory');
        var inpro = document.getElementById('inprocomp');
        if (comp.style.display == 'block') {
            dash.style.display = 'none';
            luser.style.display = 'none';
            auser.style.display = 'none';
            full.style.display = 'none';
            inpro.style.display = 'none';
            pend.style.display = 'none';
        } else {

            comp.style.display = 'block';
            dash.style.display = 'none';
            luser.style.display = 'none';
            auser.style.display = 'none';
            full.style.display = 'none';
            inpro.style.display = 'none';
            pend.style.display = 'none';
        }

    }

    function inpro() {
        var inpro = document.getElementById('inprocomp');
        var comp = document.getElementById('complcomp');
        var pend = document.getElementById('pending');
        var dash = document.getElementById('dashboard');
        var luser = document.getElementById('logindata');
        var auser = document.getElementById('alluser');
        var full = document.getElementById('fullhistory');
        if (inpro.style.display == 'block') {
            dash.style.display = 'none';
            luser.style.display = 'none';
            auser.style.display = 'none';
            full.style.display = 'none';
            pend.style.display = 'none';
            comp.style.display = 'none';
        } else {

            inpro.style.display = 'block';
            dash.style.display = 'none';
            luser.style.display = 'none';
            auser.style.display = 'none';
            full.style.display = 'none';
            pend.style.display = 'none';
            comp.style.display = 'none';
        }

    }

    function full() {
        var full = document.getElementById('fullhistory');
        var inpro = document.getElementById('inprocomp');
        var comp = document.getElementById('complcomp');
        var pend = document.getElementById('pending');
        var dash = document.getElementById('dashboard');
        var luser = document.getElementById('logindata');
        var auser = document.getElementById('alluser');
        if (full.style.display == 'block') {
            dash.style.display = 'none';
            luser.style.display = 'none';
            auser.style.display = 'none';
            pend.style.display = 'none';
            inpro.style.display = 'none';
            comp.style.display = 'none';
        } else {

            full.style.display = 'block';
            dash.style.display = 'none';
            luser.style.display = 'none';
            auser.style.display = 'none';
            pend.style.display = 'none';
            inpro.style.display = 'none';
            comp.style.display = 'none';
        }

    }

    function auser() {
        var auser = document.getElementById('alluser');
        var full = document.getElementById('fullhistory');
        var inpro = document.getElementById('inprocomp');
        var comp = document.getElementById('complcomp');
        var pend = document.getElementById('pending');
        var dash = document.getElementById('dashboard');
        var luser = document.getElementById('logindata');
        if (auser.style.display == 'block') {

            dash.style.display = 'none';
            luser.style.display = 'none';
            full.style.display = 'none';
            pend.style.display = 'none';
            inpro.style.display = 'none';
            comp.style.display = 'none';
        } else {
            auser.style.display = 'block';
            dash.style.display = 'none';
            luser.style.display = 'none';
            full.style.display = 'none';
            pend.style.display = 'none';
            inpro.style.display = 'none';
            comp.style.display = 'none';
        }

    }

    function luser() {
        var luser = document.getElementById('logindata');
        var full = document.getElementById('fullhistory');
        var inpro = document.getElementById('inprocomp');
        var auser = document.getElementById('alluser');
        var comp = document.getElementById('complcomp');
        var pend = document.getElementById('pending');
        var dash = document.getElementById('dashboard');
        if (luser.style.display == 'none') {
            dash.style.display = 'none';
            full.style.display = 'none';
            pend.style.display = 'none';
            inpro.style.display = 'none';
            auser.style.display = 'none';
            comp.style.display = 'none';

            document.getElementById("logindata").style.display = "block";
        } else {

            document.getElementById("logindata").style.display = "block";

            dash.style.display = 'none';
            auser.style.display = 'none';
            full.style.display = 'none';
            pend.style.display = 'none';
            inpro.style.display = 'none';
            comp.style.display = 'none';
        }

    }
    </script>
</head>

<body>


    <nav style="display: flex; justify-content: space-between;background-color: #e7ebe6; padding: 10px 0; height: 8.5vh;">
        <div style="display: flex;"><i class="fa fa-reorder" onclick="callsh()"
            style="cursor:pointer;font-size:24px;margin-top: 11px; margin-left: 15px;color:grey"></i>
        
            <h3 style="cursor:pointer; padding-top: 3px; padding-left: 40px;">VIT Soln. Admin</h3>

        </div>
        <div style="margin-right: 8px; margin-top: 8px;">
            <a style="background-color:#ff8903; padding: 10px 20px;border-radius: 10px;border: none; text-decoration: none; color: white; font-size: 18px;"
                href="adminlogin1.php">Logout</a>
        </div>
    </nav>

    <div style="display: flex;height: 91.5vh;">
        <nav style="width: 450px; padding: 0; background-color: #e7ebe6;" id="sh_menu">
            <div style="text-align: center; margin: 10px 0px;">
                <i class="fa fa-user fa-5x" aria-hidden="true" style="background-color: #545453; color: white; padding: 10px 24px; border-radius: 50%;"></i>
            </div>
            <!-- Links -->
            <ul style="width: 100%; background-color: #e7ebe6; padding-right: 40px;">
                <li style="list-style: none; background-color: #545453; padding: 10px 20px; text-align: center; border-radius: 10px; margin-bottom: 13px;">
                    <a style="color: white; font-size: 18px; text-decoration: none;" onclick="dashboard()" href="#">Dashboard</a>
                </li>
                <li style="list-style: none; background-color: #545453; padding: 10px 20px; text-align: center; border-radius: 10px;">
                    <a style="color: white; font-size: 18px; text-decoration: none;" onclick="comp()" href="#">Manage Complaints</a>
                </li>
                <li id="p_comp" style="display: none; list-style: none; background-color: grey; padding: 0px 20px; text-align: center; border-radius: 10px; margin-bottom: 5px; margin-top: 13px;">
                    <a style="color: white; font-size: 18px; text-decoration: none; display: flex; justify-content: space-between; align-items: center;" onclick="pending()" href="#">Pending complaints<p id="specialchk" style="padding: 3px 11px; background-color: #545453; border-radius: 50%;margin-top: 15px;">
                            <?php echo $pend;?></p></a>
                </li>
                <li id="i_comp" style="display:none; list-style: none; background-color: grey; padding: 0px 20px; text-align: center; border-radius: 10px; margin-bottom: 5px;">
                    <a style="color: white; font-size: 18px; text-decoration: none; display: flex; justify-content: space-between; align-items: center;" onclick="inpro()" href="#">In progress<p id="specialchk" style="padding: 3px 11px; background-color: #545453; border-radius: 50%;margin-top: 15px;">
                            <?php echo $inpro;?></p></a>
                </li>
                <li id="ccomp" style="display:none; list-style: none; background-color: grey; padding: 0px 20px; text-align: center; border-radius: 10px; margin-bottom: 5px;">
                    <a style="color: white; font-size: 18px; text-decoration: none; display: flex; justify-content: space-between; align-items: center;" onclick="complcomp()" href="#">Complete Complaints<p id="specialchk" style="padding: 3px 11px; background-color: #545453; border-radius: 50%;margin-top: 15px;">
                            <?php echo $compl; ?></p></a>
                </li>
                <li id="f_comp" style="display:none; list-style: none; background-color: grey; padding: 0px 20px; text-align: center; border-radius: 10px;">
                    <a style="color: white; font-size: 18px; text-decoration: none; display: flex; justify-content: space-between; align-items: center;" onclick="full()" href="#">Full Complaint history<p id="specialchk" style="padding: 3px 11px; background-color: #545453; border-radius: 50%;margin-top: 15px;">
                            <?php echo $full;?></p></a>
                </li>

                <li style="list-style: none; background-color: #545453; padding: 10px 20px; text-align: center; border-radius: 10px; margin-top: 13px;">
                    <a style="color: white; font-size: 18px; text-decoration: none;" onclick="manageuser()" href="#">Manage Users</a>
                </li>
                <li id="a_user" style="list-style: none; display: none; background-color: grey; padding: 10px 20px; text-align: center; border-radius: 10px; margin-top: 13px;">
                    <a style="color: white; font-size: 18px; text-decoration: none;" onclick="auser()" href="#">All users data</a>
                </li>
                <li id="l_user" style="list-style: none; display: none; background-color: grey; padding: 10px 20px; text-align: center; border-radius: 10px;margin-top: 5px;">
                    <a style="color: white; font-size: 18px; text-decoration: none;" onclick="luser()" href="#">User Login info</a>
                </li>

            </ul>
        </nav>

        <div id="main" style="width:100%;">
            <!----------------------------------------------------------------------------------------DASHBOARD-->
            <div class="" id="dashboard" style="width:100%;display:block;padding:20px;">
                <h4>Dashboard<hr /></h4>
                <div style="display: flex; width: 800px; justify-content: space-between;">
                    <div style="border: 2px solid black; padding-left: 10px; padding-right: 10px; padding-top: 20px; padding-bottom: 10px; border-radius: 15px; width: 260px;">
                        <div id="file1" style="display: flex; flex-direction: column; align-items: center; height: 100px; justify-content: space-between; margin-bottom: 20px;">
                            <i class="fa fa-clock-o fa-5x" aria-hidden="true"></i>
                            <div style="display: flex;"><p id="file12" style="display:block;font-size:20px;text-align:center;">Pending complaints&nbsp;
                            <div id="pen" style="display:block;font-size:20px; padding-top: 1px;"><?php echo $pend; ?></div></p></div>
                        </div>
                    <p onclick="pending()" style="background-color: #545453;color: white;cursor:pointer; padding: 10px 20px; width: 100%; text-align: center; border-radius: 15px; font-size: 20px;">Review</p>
                </div>
                <div style="border: 2px solid black; padding-left: 10px; padding-right: 10px; padding-top: 20px; padding-bottom: 10px; border-radius: 15px; width: 260px;">
                    <div id="file2" style="display: flex; flex-direction: column; align-items: center; height: 100px; justify-content: space-between; margin-bottom: 20px;">
                        <i class="fa fa-spinner fa-5x" aria-hidden="true"></i>
                        <div style="display: flex;"><p id="file22" style="display:block;font-size:20px;text-align:center;">In progress complaints&nbsp;
                        <div id="pen2" style="display:block;font-size:20px; padding-top: 1px;"><?php echo $inpro; ?></div></p></div>                           
                    </div>
                    <p onclick="inpro()" style="background-color: #545453;color: white;cursor:pointer; padding: 10px 20px; width: 100%; text-align: center; border-radius: 15px; font-size: 20px;">Review</p>
                </div>
                <div style="border: 2px solid black; padding-left: 10px; padding-right: 10px; padding-top: 20px; padding-bottom: 10px; border-radius: 15px; width: 260px;">
                    <div id="file3" style="display: flex; flex-direction: column; align-items: center; height: 100px; justify-content: space-between; margin-bottom: 20px;">
                        <i class="fa fa-file-text fa-5x"></i>
                        <div style="display: flex;"><p id="file32" style="display:block;font-size:20px;text-align:center;">Completed complaints&nbsp;
                        <div id="pen3" style="display:block;font-size:20px; padding-top: 1px;"><?php echo $compl; ?></div></p></div>                                                
                    </div>
                    <p onclick="complcomp()" style="background-color: #545453;color: white;cursor:pointer; padding: 10px 20px; width: 100%; text-align: center; border-radius: 15px; font-size: 20px;">Review</p>   
                </div>
            </div>
        </div>

            <!----------------------------------------------------------------------------------------DASHBOARD-->


            <!----------------------------------------------------------------------------------------pending-->

            <div class="" id="pending"
                style="width:97%;display:none;border-radius:15px;padding:15px;margin:20px;background-color:#dfe0de;border:1px solid #545453;">
                <h4>Pending Complaints
                    <hr />
                </h4>
                <?php
                        $query1="SELECT * FROM `complaints`";
                        $result=mysqli_query($conn,$query1);
                            $num=0;
                    
                            if($result)
                            {
                                while($row=mysqli_fetch_assoc($result))
                                    {
                                        
                                        $cme=$row['pending'];
                                        if($cme=='1')
                                        {
                                            
                                            $num++;
                                                $id=$row['id'];
                                                $usr=$row['user'];
                                                $cate=$row['category'];
                                                $subcate=$row['subcategory'];
                                                $nat=$row['nature'];
                                                $da=$row['date'];
                                                $fil=$row['file'];
                                                $co=$row['comp'];
                                                echo "<h5 class='tr'>
                                                
                                                <form method='POST' action='solvepend1.php'>
                                                <input type='hidden' name='user' value='$usr' class='now'>
                                                <input type='hidden' name='compid' value='$id' class='now'>
                                                <input type='submit' value='solve it' style='float:right;margin:0px;' class='btn btn-info' >
                                                </form>
                                                  
                                                $num) User: $usr  
                                                                                        
                                                </h5>";
                                                echo"<h6>File:               ";
                                                if($fil==""||$fil=='0')
                                                {
                                                    
                                                echo "<span id='span'>No file</span><br />";
                                                }
                                                else{
                                                echo "<a href='$fil' target='_blank'>view file</a><br />";
                                                }
                                                echo "Complaint-categoty:<span id='span'> $cate</span><br />
                                                Complaint-Subcategoty:   <span id='span'>$subcate</span><br />
                                                Complaint-Nature:        <span id='span'>$nat</span><br />
                                                Complaint-Date:          <span id='span'>$da</span><br />
                                                COMPLAINT:               <span id='span'>$co</span><br /></h6><br /><hr />";
                                            
                                        }
                                    }
                            }
                                                
                    ?>
            </div>

            <!----------------------------------------------------------------------------------------pending-->
            <!----------------------------------------------------------------------------------------inprogress-->

            <div class="" id="inprocomp"
                style="width:97%;display:none;border-radius:15px;padding:15px;margin:20px;background-color:#dfe0de;border:1px solid #545453;">
                <h4>In progress Complaints
                    <hr />
                </h4>
                <?php
                    $num=0;
                    $query1="SELECT * FROM `complaints`";
                    $seee="SELECT * FROM `inprogressomp`";
                    $reso=mysqli_query($conn,$seee);
                        
                        if($reso)
                        {
                            while($inpro=mysqli_fetch_assoc($reso))
                            {
                                $inid=$inpro['compnum'];
                            $result=mysqli_query($conn,$query1);
                            
                            if($result)
                                {
                                while($row=mysqli_fetch_assoc($result))
                                    {				
                                            $id=$row['id'];
                                            if($id==$inid)
                                            {
                                                $num++;
                                                $usr=$row['user'];
                                                $cate=$row['category'];
                                                $subcate=$row['subcategory'];
                                                $nat=$row['nature'];
                                                $da=$row['date'];
                                                $fil=$row['file'];
                                                $co=$row['comp'];
                                                echo "<h5 class='tr'>
                                                
                                                <form method='POST' action='solveinpro1.php'>
                                                <input type='hidden' name='user' value='$usr' class='now'>
                                                <input type='hidden' name='compid' value='$id' class='now'>
                                                <input type='submit' value='complete it' style='float:right;margin:0px;' class='btn btn-secondary' >
                                                </form>
                                                  
                                                $num) User: $usr 				
                                                </h5>";
                                                echo"<h6>File:               ";
                                                if($fil==""||$fil=='0')
                                                {
                                                    
                                                echo "<span id='span'>No file</span><br />";
                                                }
                                                else{
                                                echo "<a href='$fil' target='_blank'>view file</a><br />";
                                                }
                                                echo "Complaint-categoty:<span id='span'> $cate</span><br />
                                                Complaint-Subcategoty:   <span id='span'>$subcate</span><br />
                                                Complaint-Nature:        <span id='span'>$nat</span><br />
                                                Complaint-Date:          <span id='span'>$da</span><br />
                                                COMPLAINT:                <span id='span'>$co</span><br /></h6><br /><hr />";
                                            }
                                            
                                        
                                    }
                                }
                            }
                        }
                    ?>
            </div>

            <!----------------------------------------------------------------------------------------inprogress-->
            <!----------------------------------------------------------------------------------------completed-->

            <div class="" id="complcomp"
                style="width:97%;display:none;border-radius:15px;padding:15px;margin:20px;background-color:#dfe0de;border:1px solid #545453;">
                <h4>Completed Complaints
                    <hr />
                </h4>
                <?php
                    $num=0;
                    $query1="SELECT * FROM `complaints`";
                    $seee="SELECT * FROM `completedcomp`";
                    $reso=mysqli_query($conn,$seee);
                        
                        if($reso)
                        {
                            while($coomp=mysqli_fetch_assoc($reso))
                            {
                                $cid=$coomp['compnum'];
                                $remark=$coomp['remark'];
                            $result=mysqli_query($conn,$query1);
                            
                            if($result)
                                {
                                while($row=mysqli_fetch_assoc($result))
                                    {				
                                            $id=$row['id'];
                                            if($id==$cid)
                                            {
                                                $num++;
                                                $usr=$row['user'];
                                                $cate=$row['category'];
                                                $subcate=$row['subcategory'];
                                                $nat=$row['nature'];
                                                $da=$row['date'];
                                                $fil=$row['file'];
                                                $co=$row['comp'];
                                                echo "<h5 class='tr'>											
                                                $num) User: $usr  				
                                                </h5>
                                                <h6>
                                                Remark :<span id='remark'>$remark</span><br />
                                                ";
                                                echo"File:               ";
                                                if($fil==""||$fil=='0')
                                                {
                                                    
                                                echo "<span id='span'>No file</span><br />";
                                                }
                                                else{
                                                echo "<a href='$fil' target='_blank'>view file</a><br />";
                                                }
                                                echo "
                                                Complaint-categoty:<span id='span'> $cate</span><br />
                                                Complaint-Subcategoty:   <span id='span'>$subcate</span><br />
                                                Complaint-Nature:        <span id='span'>$nat</span><br />
                                                Complaint-Date:          <span id='span'>$da</span><br />
                                                COMPLAINT:                <span id='span'>$co</span><br /></h6><br /><hr />";
                                            }
                                            
                                        
                                    }
                                }
                            }
                        }
                    ?>
            </div>

            <!----------------------------------------------------------------------------------------inprogress-->
            <!----------------------------------------------------------------------------------------full-->

            <div class="" id="fullhistory"
                style="width:97%;display:none;border-radius:15px;padding:15px;margin:20px;background-color:#dfe0de;border:1px solid #545453;">
                <h3>Full history of Complaints
                    <hr />
                </h3>
                <h4>Pending Complaints
                    <hr />
                </h4>
                <?php
                        $query1="SELECT * FROM `complaints`";
                        $result=mysqli_query($conn,$query1);
                            $num=0;
                    
                            if($result)
                            {
                                while($row=mysqli_fetch_assoc($result))
                                    {
                                        
                                        $cme=$row['pending'];
                                        if($cme=='1')
                                        {
                                            
                                            $num++;
                                                $id=$row['id'];
                                                $usr=$row['user'];
                                                $cate=$row['category'];
                                                $subcate=$row['subcategory'];
                                                $nat=$row['nature'];
                                                $da=$row['date'];
                                                $fil=$row['file'];
                                                $co=$row['comp'];
                                                echo "<h5 class='tr'>
                                                
                                                <form method='POST' action='solvepend1.php'>
                                                <input type='hidden' name='user' value='$usr' class='now'>
                                                <input type='hidden' name='compid' value='$id' class='now'>
                                                <input type='submit' value='solve it' style='float:right;margin:0px;' class='btn btn-info' >
                                                </form>
                                                
                                                $num) User: $usr 
                                                                                        
                                                </h5>";
                                                echo"<h6>File:               ";
                                                if($fil==""||$fil=='0')
                                                {
                                                    
                                                echo "<span id='span'>No file</span><br />";
                                                }
                                                else{
                                                echo "<a href='$fil' target='_blank'>view file</a><br />";
                                                }
                                                echo "Complaint-categoty:<span id='span'> $cate</span><br />
                                                Complaint-Subcategoty:   <span id='span'>$subcate</span><br />
                                                Complaint-Nature:        <span id='span'>$nat</span><br />
                                                Complaint-Date:          <span id='span'>$da</span><br />
                                                COMPLAINT:                <span id='span'>$co</span><br /></h6><br /><hr />";
                                            
                                        }
                                    }
                            }
                            
                            
                            //////////////////////////////////////////////////////////////////////////////////////////////////////////////
                            echo "<br /br /><h4>Inprogress Complaints<hr /></h4>";
                            $num=0;
                    $query1="SELECT * FROM `complaints`";
                    $seee="SELECT * FROM `inprogressomp`";
                    $reso=mysqli_query($conn,$seee);
                        
                        if($reso)
                        {
                            while($inpro=mysqli_fetch_assoc($reso))
                            {
                                $inid=$inpro['compnum'];
                            $result=mysqli_query($conn,$query1);
                            
                            if($result)
                                {
                                while($row=mysqli_fetch_assoc($result))
                                    {				
                                            $id=$row['id'];
                                            if($id==$inid)
                                            {
                                                $num++;
                                                $usr=$row['user'];
                                                $cate=$row['category'];
                                                $subcate=$row['subcategory'];
                                                $nat=$row['nature'];
                                                $da=$row['date'];
                                                $fil=$row['file'];
                                                $co=$row['comp'];
                                                echo "<h5 class='tr'>
                                                
                                                <form method='POST' action='solveinpro1.php'>
                                                <input type='hidden' name='user' value='$usr' class='now'>
                                                <input type='hidden' name='compid' value='$id' class='now'>
                                                <input type='submit' value='complete it' style='float:right;margin:0px;' class='btn btn-secondary' >
                                                </form>
                                                
                                                $num) User: $usr 				
                                                </h5>";
                                                echo"<h6>File:               ";
                                                if($fil==""||$fil=='0')
                                                {
                                                    
                                                echo "<span id='span'>No file</span><br />";
                                                }
                                                else{
                                                echo "<a href='$fil' target='_blank'>view file</a><br />";
                                                }
                                                echo "Complaint-categoty:<span id='span'> $cate</span><br />
                                                Complaint-Subcategoty:   <span id='span'>$subcate</span><br />
                                                Complaint-Nature:        <span id='span'>$nat</span><br />
                                                Complaint-Date:          <span id='span'>$da</span><br />
                                                COMPLAINT:               <span id='span'>$co</span><br /></h6><br /><hr />";
                                            }
                                            
                                        
                                    }
                                }
                            }
                        }
                        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                            //////////////////////////////////////////////////////////////////////////////////////////////////////////////
                            echo "<br /br /><h4>Completed Complaints<hr /></h4>";	

                    $num=0;
                    $query1="SELECT * FROM `complaints`";
                    $seee="SELECT * FROM `completedcomp`";
                    $reso=mysqli_query($conn,$seee);
                        
                        if($reso)
                        {
                            while($coomp=mysqli_fetch_assoc($reso))
                            {
                                $cid=$coomp['compnum'];
                                $remark=$coomp['remark'];
                            $result=mysqli_query($conn,$query1);
                            
                            if($result)
                                {
                                while($row=mysqli_fetch_assoc($result))
                                    {				
                                            $id=$row['id'];
                                            if($id==$cid)
                                            {
                                                $num++;
                                                $usr=$row['user'];
                                                $cate=$row['category'];
                                                $subcate=$row['subcategory'];
                                                $nat=$row['nature'];
                                                $da=$row['date'];
                                                $fil=$row['file'];
                                                $co=$row['comp'];
                                                echo "<h5 class='tr'>											
                                                $num) User: $usr   				
                                                </h5>
                                                <h6>
                                                Remark :<span id='remark'>$remark</span><br />
                                                ";
                                                echo"File:               ";
                                                if($fil==""||$fil=='0')
                                                {
                                                    
                                                echo "<span id='span'>No file</span><br />";
                                                }
                                                else{
                                                echo "<a href='$fil' target='_blank'>view file</a><br />";
                                                }
                                                echo "
                                                Complaint-categoty:<span id='span'> $cate</span><br />
                                                Complaint-Subcategoty:   <span id='span'>$subcate</span><br />
                                                Complaint-Nature:        <span id='span'>$nat</span><br />
                                                Complaint-Date:          <span id='span'>$da</span><br />
                                                COMPLAINT:               <span id='span'>$co</span><br /></h6><br /><hr />";
                                            }
                                            
                                        
                                    }
                                }
                            }
                        }						
                        ////////////////////////////////////////////////////////
                ?>
            </div>

            <!----------------------------------------------------------------------------------------full-->

            <!----------------------------------------------------------------------------------------all-user-->

            <div class="" id="alluser"
                style="width:97%;display:none;border-radius:15px;padding:15px;margin:10px;background-color:#dfe0de;border:1px solid #545453;">
                <h4>All Users data
                    <hr />
                </h4>
                <?php
                        $num=0;
                        $userss="SELECT * FROM `userregistration`";
                        $result786=mysqli_query($conn,$userss);
                        if($result786)
                        {
                            while($rowuser=mysqli_fetch_assoc($result786))
                            {$num++;
                                $fnamen=$rowuser['fname'];
                                $lnamen=$rowuser['lname'];
                                $usern=$rowuser['username'];
                                $mailn=$rowuser['email'];
                                $phonen=$rowuser['phone'];
                                $gendern=$rowuser['gender'];
                                $daten=$rowuser['date'];
                                echo"
                                <table class='table table-striped table-info table-hover'> 
                                    <tr class='thead'><th>Number</th><th>$num</th></tr>
                                    <tr><td>First Name</td><td>$fnamen</td></tr>
                                    <tr><td>Last Name</td><td>$lnamen</td></tr>
                                    <tr><td>Username</td><td>$usern</td></tr>
                                    <tr><td>Email</td><td>$mailn</td></tr>
                                    <tr><td>Phone Number</td><td>$phonen</td></tr>
                                    <tr><td>Gender</td><td>$gendern</td></tr>
                                    <tr><td>Date</td><td>$daten</td></tr><hr /><br />
                                    </table>
                                    ";
                            }
                        }
                    
                    ?>
            </div>

            <!----------------------------------------------------------------------------------------all-user-->
            <!----------------------------------------------------------------------------------------Login-->
            <div class="" id="logindata"
                style="width:97%;float:left;display:none;border-radius:15px;padding:15px;margin:10px;background-color:#dfe0de;border:1px solid #545453;">
                <h4>Login data
                    <hr />
                </h4>
                <?php
                        $num=0;
                        $users="SELECT * FROM `userlogininfo`";
                        $result78=mysqli_query($conn,$users);
                        if($result78)
                        {
                            while($rowuser=mysqli_fetch_assoc($result78))
                            {$num++;
                                $fnamen=$rowuser['fname'];
                                $lnamen=$rowuser['lname'];
                                $usern=$rowuser['user'];
                                $daten=$rowuser['date'];
                                    echo"
                                    <table class='table table-striped table-danger table-hover'> 
                                        <tr class='thead'><th>Number</th><th>$num</th></tr>
                                        <tr><td>First Name</td><td>$fnamen</td></tr>
                                        <tr><td>Last Name</td><td>$lnamen</td></tr>
                                        <tr><td>Username</td><td>$usern</td></tr>
                                        <tr><td>Date</td><td>$daten</td></tr><hr /><br />
                                        </table>
                                        ";
                            }
                        }
                        
                    ?>
            </div>

            <!----------------------------------------------------------------------------------------Login-->

        </div>
    </div>
    <!-- <div id="foot"
        style="background-color:grey;height:80px;width:100%;float:left;margin-top:10px;text-align:center;padding:20px">
        © 2019 Copyright:
        <a href="https://cui.edu.pk/"> cuiwah.edu.pk</a>
    </div> -->

</body>

</html>