<?php 
    session_start();
    include '../model/db_connection.php';

    $process_info = new stdClass();
    $process_info->is_name_required = 0;
    $process_info->is_email_required = 0;

    // validation start
    if($_POST["NAME"]=="")
    {
        $process_info->is_name_required = 1;
    }
    
    if($_POST["EMAIL"]=="")
    {
        $process_info->is_email_required = 1;
    }

    if($_POST["NAME"]=="" || $_POST["EMAIL"]=="")
    {
        // header("Location:../view/signup.php");

        echo json_encode($process_info);
    } else
    {
        $sql = "UPDATE `users` SET `NAME`='".$_POST['NAME']."',`EMAIL`='".$_POST['EMAIL']."',`GENDER`='".$_POST['GENDER']."',`CONTACT_NO`='".$_POST['CONTACT_NO']."',`TITLE`='".$_POST['TITLE']."',`ADDRESS`='".$_POST['ADDRESS']."' WHERE `ID`='".$_POST['ID']."'";
        $row = mysqli_query($con,$sql);
        if($row){
            $process_info->is_successful = 1;

            echo json_encode($process_info);
        }
    }

?>