<?php
$sname = "localhost";
$uname = "root";
$pwd = "";
$con = mysqli_connect($sname,$uname,$pwd,'covid');
$adh=$_POST['adhar'];
   // $pwd=$_POST['password'];
   
    //$cnf=$_POST['cnfpwd'];
	
	$sql = "INSERT INTO data (adhar) VALUES
            ('$adh')";
			

    if(!mysqli_query($con,$sql))
	{
		echo "data not insered";
	}
	else
   {
		echo "Data inserted";
   }
	header("refresh:2,url= covid2.html");

	
    ?>
