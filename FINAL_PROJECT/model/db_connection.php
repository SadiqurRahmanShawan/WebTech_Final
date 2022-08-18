<?php

	$dbname = "agricultural_gain";
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$con = mysqli_connect($hostname, $username, $password, $dbname );
	mysqli_set_charset($con, "utf8");

    if($con->connect_error)
    {
        die("Connection failed:".$con->connect_error);
    }
    else
    {
//         echo "no data to display";	
    }
?>
