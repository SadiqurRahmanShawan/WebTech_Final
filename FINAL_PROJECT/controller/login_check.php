<?php 
     session_start();
    include '../model/db_connection.php';
    
    // users   NAME	EMAIL	GENDER	CONTACT_NO	TITLE	ADDRESS	PASSWORD
    // validation start
    if(isset($_POST["EMAIL"]) && isset($_POST["PASSWORD"]) && $_POST["EMAIL"]!=null && $_POST["PASSWORD"] != null)
    {
        $EMAIL = trim($_POST["EMAIL"]);
	    $PASSWORD = trim($_POST["PASSWORD"]);
	    $sql = "SELECT * FROM `users` WHERE `EMAIL` = '$EMAIL' AND `PASSWORD` = '$PASSWORD'";
        //	echo $sql;
        $result = mysqli_query($con,$sql);
        $data = mysqli_fetch_assoc($result);
        // print_r($data);

        if(isset($data['EMAIL']))
        {
            setcookie('loggedin_email', $data['EMAIL'], [
                'expires' => time()+3600, // 3600 sec = 1 hour
                'path' => '/',
                'domain' => '',
                'secure' => false,
                'httponly' => true, // JavaScript can not access it
                'samesite' => 'Lax',
            ]);
            setcookie('loggedin_type', $data["TYPE"], [
                'expires' => time()+3600, // 3600 sec = 1 hour
                'path' => '/',
                'domain' => '',
                'secure' => false,
                'httponly' => true, // JavaScript can not access it
                'samesite' => 'Lax',
            ]);
            header("Location:../view/profile.php");
        } else 
        {
            $_SESSION["is_valid"] = 0;
        }
    } else
    {
        $_SESSION["is_valid"] = 0;
    }
    if(isset($_SESSION["is_valid"]) && $_SESSION["is_valid"]==0)
    {
        header("Location:../view/login.php");
    }
?>