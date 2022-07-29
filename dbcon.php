<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="database1";
    $name="sadiq";
    $email="zzz@gmail.com";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
        die("Connection failed:".$conn->connect_error);
    }
    else
    {
//        $q="CREATE TABLE Teacher(ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Name VARCHAR(50), Email VARCHAR(50))";
//        $q="INSERT INTO Student(Name,Email) VALUES('".$name."','".$email."')";
        $q= "UPDATE Teacher SET Name = '".$name."', Email = '".$email."' WHERE ID=1";
        $result=$conn->query($q);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "ID:".$row["ID"]."Name:".$row["Name"]."Email:".$row["Email"]."<br>";
            }
        }
        else
        {
         echo "table is empty";	
        }
    }
?>