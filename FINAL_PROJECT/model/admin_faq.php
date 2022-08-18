<?php
    session_start();
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
            <img class="logo" src="images/Logo.JPG">
            <div class="moto">
                <h2>AGRICULTURAL GAIN</h2>
                <h4>A complete solution of farming</h4>
            </div>
        </div>

    </div>

    <div style="clear: both;"></div>


    <div class="nav_bar">

        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>

    </div>

    <div class="sign_up_form">
        <div class="container">
            <div class="container_left" style="margin: auto;float: unset;">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email">

                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass">

                <?php
                        if(isset($_SESSION["is_valid"]) && $_SESSION["is_valid"]==0)
                            echo "<span style='color:red;'>Email or Password do not match.</span>";
                ?>
                <button name="btnClick" value="Submit" type="submit">Login</button>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <div style="clear: both;"></div>


    <div style="clear: both;"></div>

    <div class="contact">
        <div>
            <h1>Address:</h1>
            <p>680 Inverness Street <br>Winter Haven, FL 33880</p>
        </div>
        <div>
            <h1>Contact:</h1>
            <p>Phone: 77883378676</p>
            <p>Email: hello@example.com</p>
        </div>
    </div>

</body>

</html>

<?php
    unset($_SESSION["is_valid"]);
?>