<?php
    session_start();
    include '../model/db_connection.php';
?>

<?php
    //update 
//    if(isset($_POST['update'])){
//        date_default_timezone_set('asia/dhaka');
//        $date = date('Y-m-d H:i:s');
//        $sql = '';
//        $id = $_GET['edit'] ;
//        $TRN_DATE = $_POST['TRN_DATE'];
//        $DONOR_NO = $_POST['DONOR_NO'];
//        $ITEM_NO = $_POST['ITEM_NO'];
//        $QUANTITY = $_POST['QUANTITY'];
//        $UNIT = $_POST['UNIT'];
//        $sql = "UPDATE item_in_outs SET `UNIT` = '".$UNIT."',`TRN_DATE` = '".$TRN_DATE."', `DONOR_NO` = '".$DONOR_NO."', `ITEM_NO` = '".$ITEM_NO."', `QUANTITY` = '".$QUANTITY."' WHERE ITEM_IN_OUT_NO='".$id."';";
//        $row = mysqli_query($con,$sql);
//        if($row){
//        echo "<script>alert('Successfully Updated!');</script>";
//            // echo '<meta http-equiv="refresh" content="0">';
//        }else{
//            echo "not";
//        }
//    }
?>
<?php 
//    if(isset($_GET['edit'])){
//        $id = $_GET['edit'] ;
//        $sql = "SELECT * FROM item_in_outs WHERE ITEM_IN_OUT_NO = '$id'" ;
//        $assoc = mysqli_fetch_assoc ( mysqli_query( $con , $sql ) ) ;
//    }
?>

<?php 
//    if(isset($_GET['delete'])){
//        $id = $_GET['delete'] ;
//        $sql = "UPDATE item_in_outs SET IS_DELETED = 1 WHERE ITEM_IN_OUT_NO = '$id';";
//        $assoc = mysqli_fetch_assoc ( mysqli_query( $con , $sql ) ) ;
//        echo "<script>alert('Successfully Deleted!');</script>";
//    }
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
    <form action="../controller/admin_registration.php" onsubmit="return validate()" method="post">

        <div class="sign_up_form">

<!--users   NAME	EMAIL	GENDER	CONTACT_NO	TITLE	ADDRESS	PASSWORD-->
            <div class="container">
                <div class="container_left">
                    <label for="uname"><b>Username</b></label>
                    <?php
                        if(isset($_SESSION["is_uname_required"]) && $_SESSION["is_uname_required"]==1)
                         echo "<span style='color:red;'>Required</span>";
                    ?>
                    <input type="text" placeholder="Enter Username" name="NAME" id="NAME" >

                    <label for="email"><b>Email</b></label>
                    <?php
                        if(isset($_SESSION["is_email_required"]) && $_SESSION["is_email_required"]==1)
                         echo "<span style='color:red;'>Required</span>";
                    ?>
                    <input type="email" placeholder="Enter Email" name="EMAIL" id="EMAIL" >
                    
                    <div class="container_gender">
                    <label for="gender"><b>Gender</b></label>
                    <input type="radio" name="GENDER" id="GENDER" value="Male">Male
                    <input type="radio" name="GENDER" id="GENDER" value="Female">Female
                    <input type="radio" name="GENDER" id="GENDER" value="Others">Others
                    </div>

                    <label for="contact"><b>Contact No</b></label>
                    <input type="text" placeholder="Enter contact" name="CONTACT_NO" id="CONTACT_NO" >
                </div>
                <div class="container_right">

                    <label for="title"><b>Title</b></label>
                    <input type="text" placeholder="Enter title" name="TITLE" id="TITLE" >
                    
                    <label for="address"><b>Address</b></label>
                    <input type="text" placeholder="Enter address" name="ADDRESS" id="ADDRESS" >

                    <label for="pass"><b>Password</b></label>
                    <?php
                        if(isset($_SESSION["is_pass_required"]) && $_SESSION["is_pass_required"]==1)
                         echo "<span style='color:red;'>Required</span>";
                    ?>
                    <input type="password" placeholder="Enter Password" name="PASSWORD" id="PASSWORD" >

                    <button name="btnClick" value="Submit" type="submit">SignUp</button>
                    
                    
<!--                <button class="cancelbtn" style="background-color:red; float: right" type="button" class="">Cancel</button>-->
                </div>
                <div style="clear: both;"></div>
            </div>

           

        </div>
    </form>
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
	<script>
	function validate()
	{
		var username=document.getElementById('CONTACT_NO');
		var password=document.getElementById('TITLE');
		if(username.value=="" || password.value=="")
		{
			alert("Username or password is empty");
			return false;
		}
		else
			return true;
	}
	</script>
</html>

<?php
    unset($_SESSION["is_uname_required"]);
    unset($_SESSION["is_email_required"]);
    unset($_SESSION["is_pass_required"]);
?>