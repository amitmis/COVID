<?php
$sname = "localhost";
$uname = "root";
$pwd = "";
$con = mysqli_connect($sname,$uname,$pwd,'covid');
$name =$_POST['name'];
$tem=$_POST['tem'];
   
$img=$_POST['img'];
$eme=$_POST['emg'];
$sel1=$_POST['state'];
$sel2=$_POST['city'];

$sql = "INSERT INTO qma (name,tem,img,city,State,emer) VALUES
            ('$name','$tem', LOAD_FILE('$img'),'$sel2','$sel1','$eme')";
    if(!mysqli_query($con,$sql))
	{
		echo mysqli_error($con);
	}
	else
   {
		echo "Data inserted";
   }
	header("refresh:2,url= covid2.html");

	
    ?>
