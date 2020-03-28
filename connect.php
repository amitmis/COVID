<?php
$sname = "localhost";
$uname = "root";
$pwd = "";
$con = mysqli_connect($sname,$uname,$pwd,'mydb');

    $email=$_POST['email'];
    $pwd=$_POST['password'];
   
    //$cnf=$_POST['cnfpwd'];
	
	$sql = "INSERT INTO data (email, password) VALUES
            ('$email', '$pwd')";
			

    if(!mysqli_query($con,$sql))
	{
		echo "data not insered";
	}
	else
   {
		echo "Data inserted";
   }
	//header("refresh:1,url= signin.html");

	
    ?>
