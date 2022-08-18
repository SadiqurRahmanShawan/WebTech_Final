<?php 
    session_start();
    include '../model/db_connection.php';

    $sql = "DELETE FROM `users` WHERE `ID` =".$_GET["user_id"];
    $row = mysqli_query($con,$sql);

    header("Location:../view/profile.php");
?>