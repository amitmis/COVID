<?php
$sname = "localhost";
$uname = "root";
$pwd = "";
$con = mysqli_connect($sname,$uname,$pwd,'covid');
$name =$_POST['name'];
$tem=$_POST['temp'];
   
$img=$_POST['img'];
	
$sql = "INSERT INTO qma (name,temp,img) VALUES
            ('$name','$tem', LOAD_FILE('$img'))";
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
