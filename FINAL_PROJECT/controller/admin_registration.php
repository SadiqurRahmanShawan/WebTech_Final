<?php 
    session_start();
     include '../model/db_connection.php';

    // validation start
    if($_POST["NAME"]=="")
    {
        $_SESSION["is_uname_required"] = 1;
    }
    
    if($_POST["EMAIL"]=="")
    {
        $_SESSION["is_email_required"] = 1;
    }
    if($_POST["PASSWORD"]=="")
    {
        $_SESSION["is_pass_required"] = 1;
    }

    if($_POST["NAME"]=="" || $_POST["EMAIL"]=="" || $_POST["PASSWORD"]=="")
    {
        header("Location:../view/signup.php");
    } else
    {
//    insert users ID	NAME	EMAIL	GENDER	CONTACT_NO	TITLE	ADDRESS	PASSWORD	DATE
        date_default_timezone_set('asia/dhaka');
        $date = date('Y-m-d H:i:s');
        $sql = '';
        $NAME = $_POST['NAME'];
        $EMAIL = $_POST['EMAIL'];
        $GENDER = $_POST['GENDER'];
        $CONTACT_NO = $_POST['CONTACT_NO'];
        $TITLE = $_POST['TITLE'];
        $ADDRESS = $_POST['ADDRESS'];
        $PASSWORD = $_POST['PASSWORD'];
        $sql = "INSERT INTO `users` ( `NAME`, `EMAIL`, `GENDER`, `CONTACT_NO`, `TITLE`, `ADDRESS`, `PASSWORD`) 
                 VALUES ('".$NAME."', '".$EMAIL."', '".$GENDER."', '".$CONTACT_NO."', '".$TITLE."', '".$ADDRESS."', '".$PASSWORD."');";
        $row = mysqli_query($con,$sql);
        if($row){
        echo "<script>alert('Successfully Saved!');</script>";
            // echo '<meta http-equiv="refresh" content="0">';
            header('Location:../view/login.php');
        }else{
            echo "not saved";
        }
         // validation end
    }

?>