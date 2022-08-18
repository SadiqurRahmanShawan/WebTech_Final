<?php
    session_start();
    include '../model/db_connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agricultural Gain</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="body">
    <div class="header">
        <div class="header_left">
            <a href="home.php"><img class="logo" src="images/Logo.JPG"></a>
            <div class="moto">
                <h2>AGRICULTURAL GAIN</h2>
                <h4>A complete solution of farming</h4>
            </div>
        </div>
        <div class="header_right">
            <?php
                if(isset($_COOKIE['loggedin_email']))
                {
                    echo "<a href='../controller/logout.php'>
                        <p>Logout</p>
                    </a>";
                } else
                {
                    echo "<a href='login.php'>
                        <p>Login</p>
                    </a>";
                }
            ?>
        </div>
    </div>
    <div style="clear: both;"></div>
    <div class="nav_bar">
        <div class="topnav">
            <?php
                if(isset($_COOKIE['loggedin_type']))
                {
                    if($_COOKIE['loggedin_type'] == "admin")
                    {
                        echo "<a class='active' href='home.php'>Home</a>
                        <a href='about.php'>Banks</a>
                        <a href='../controller/services.php'>Agriculturists</a>
                        <a href='articles.php'>Articles</a>";
                    } else
                    {
                        echo "<a class='active' href='home.php'>Home</a>
                        <a href='about.php'>About</a>
                        <a href='../controller/services.php'>Services</a>
                        <a href='articles.php'>Articles</a>";
                    }
                }
            ?>
        </div>
    </div>
    <!--users   NAME	EMAIL	GENDER	CONTACT_NO	TITLE	ADDRESS	PASSWORD-->
    <div class="sign_up_form">
        <div style="min-height: 260px;" class="container"> 
            <div class=""> <!--"height: 215px;"-->

                <?php
                    $sql = "";
                    if(isset($_COOKIE['loggedin_type']))
                    {
                        if($_COOKIE['loggedin_type'] == "admin")
                        {
                            $sql = "SELECT * FROM `users`";
                        }

                        if($_COOKIE['loggedin_type'] == "agriculturist")
                        {
                            $sql = "SELECT * FROM `users` WHERE `TYPE` = 'farmer'";
                        }

                        if($_COOKIE['loggedin_type'] == "farmer")
                        {
                            $sql = "SELECT * FROM `users` WHERE `EMAIL` = '".$_COOKIE['loggedin_email']."'";
                        }
                    }

                    $result=$con->query($sql);
                    $output='<table border="1" width=100%><tr><th>NAME</th><th>EMAIL</th><th>GENDER</th><th>CONTACT_NO</th>
                    <th>TITLE</th><th>ADDRESS</th><th>PASSWORD</th><th>Modify</th></tr>';
                    if($result->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
                        {
                            $output.= "<tr>
                                <td>{$row["NAME"]}</td><td>{$row["EMAIL"]}</td>
                                <td>{$row["GENDER"]}</td><td>{$row["CONTACT_NO"]}</td>
                                <td>{$row["TITLE"]}</td><td>{$row["ADDRESS"]}</td>
                                <td>{$row["PASSWORD"]}</td>
                                <td>
                                    <a href='../view/farmer_edit.php?user_id=".$row["ID"]."'><button>EDIT</button><a>
                                    <a href='../controller/farmer_delete.php?user_id=".$row["ID"]."'><button>DELETE</button><a>
                                </td>
                            </tr>";
                        }
                        $output.='</table>';
                    }
                    else
                        echo "O results";
                    echo $output;
                ?>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <div style="clear: both;"></div>
    <div style="clear: both;"></div>
    <div style="margin-right: 15px; margin-left: 15px;" class="contact">
        <div>
            <h1>Address:</h1>
            <p>4th floor, Setara Convention<br> Dhaka-1216,Mirpur-11 </p>
        </div>
        <div>
            <h1>Contact:</h1>
            <p>Phone: 77883378676 <br> Email: hello@example.com</p>
        </div>
    </div>
</body>
</html>
<?php
    unset($_SESSION["is_uname_required"]);
    unset($_SESSION["is_email_required"]);
    unset($_SESSION["is_pass_required"]);
?>