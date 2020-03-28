<?php
$sname = "localhost";
$uname = "root";
$pwd = "";
$con = mysqli_connect($sname,$uname,$pwd,'covid');

$state=$_POST['state'];
$city=$_POST['city'];
//$doc=$_POST['doc'];

$sql = "SELECT * FROM qma WHERE city ='$city'";


$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"]. " State: " ."  ". $row["State"]. "  " ."city : " ."  " .$row["city"]. "   " ."Emergency : " . "  ".$row["emer"]. "<br>";
    }
} else {
    echo "0 results";
}








    if(!mysqli_query($con,$sql))
	{
		echo mysqli_error($con);
	}
	
	//header("refresh:5,url= covid2.html");

	
    ?>
