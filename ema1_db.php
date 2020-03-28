<?php
$sname = "localhost";
$uname = "root";
$pwd = "";
$con = mysqli_connect($sname,$uname,$pwd,'covid');
$pass=$_POST['pass'];
   // $pwd=$_POST['password'];
   
    //$cnf=$_POST['cnfpwd'];
	
	$sql = "INSERT INTO ema_doc (name) VALUES
            ('$pass')";
			

    if(!mysqli_query($con,$sql))
	{
		echo "data not insered";
	}
	else
   {
		echo "Data inserted";
   }
	header("refresh:2,url= ema2.html");

	
    ?>
