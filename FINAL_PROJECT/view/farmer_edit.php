<?php
    session_start();
    include '../model/db_connection.php';

    $sql = "SELECT * FROM `users` WHERE `ID` = '".$_GET["user_id"]."'";
    $result = mysqli_query($con,$sql);
    $user = mysqli_fetch_assoc($result);
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
        <!--users   NAME	EMAIL	GENDER	CONTACT_NO	TITLE	ADDRESS	PASSWORD-->
        <div class="container">
            <div class="container_left">
                <input type="hidden" name="ID" value="<?php echo $user['ID']; ?>">

                <label for="NAME" id="name_error"><b>Name</b></label>
                <input type="text" placeholder="Name" name="NAME" value="<?php echo $user['NAME']; ?>">

                <label for="email" id="email_error"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="EMAIL" id="EMAIL" value="<?php echo $user['EMAIL']; ?>">
                
                <div class="container_gender">
                <label for="gender"><b>Gender</b></label>
                <input type="radio" name="GENDER" id="GENDER" value="Male" <?php if($user['GENDER']=="Male"){echo "checked";} ?>>Male
                <input type="radio" name="GENDER" id="GENDER" value="Female" <?php if($user['GENDER']=="Female"){echo "checked";} ?>>Female
                <input type="radio" name="GENDER" id="GENDER" value="Others" <?php if($user['GENDER']=="Others"){echo "checked";} ?>>Others
                </div>

                <label for="contact"><b>Contact No</b></label>
                <input type="text" placeholder="Enter contact" name="CONTACT_NO" id="CONTACT_NO" value="<?php echo $user['CONTACT_NO']; ?>">
            </div>
            <div class="container_right">

                <label for="title"><b>Title</b></label>
                <input type="text" placeholder="Enter title" name="TITLE" id="TITLE" value="<?php echo $user['TITLE']; ?>">
                
                <label for="address"><b>Address</b></label>
                <input type="text" placeholder="Enter address" name="ADDRESS" id="ADDRESS" value="<?php echo $user['ADDRESS']; ?>">

                <button type='button' onclick="update_farmer()">Update</button>
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

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/farmer_crud.js"></script>
</body>
</html>