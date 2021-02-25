<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <style>
    .parent {
        width: 100vw;
        height: 100vh;
        background: #34495e;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .child {
        width: 70vw;
        background: #1abc9c;
        height: 70vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    label {
        margin-bottom: 10px;
        font-size: 30px;
        font-weight: bold;
    }
    input {
        margin-bottom: 10px;
        font-size: 20px;
        outline: none;
    }
    input[type="submit"] {
        cursor: pointer;
    }
    a {
        z-index: 1;
        color: #000;
        text-decoration: none;
        border: 2px solid grey;
        background: #fff;
        padding: 5px;
        position: absolute;
        font-size: 25px;
        bottom: 96px;
        border-radius: 14px;
    }
    </style>
</head>
<body>
    <div class="parent">
        <form method="POST">
            <div class="child">
                <label>Email: </label>
                <input type="email" name="email" required auto-complete="off" placeholder="Enter your email id">
                <label>New Password: </label>
                <input type="password" name="pass" required auto-complete="off" placeholder="Enter new password">
                <label>Confirm Password: </label>
                <input type="password" name="cpass" required auto-complete="off" placeholder="Enter confirm password">
                <input type="submit" name="update" value="Update">
            </div>
        </form>
        <a href="http://localhost:8080/Project2/login.php">Back</a>
    </div>
</body>
</html>

<?php

if(isset($_POST['update'])){
    $emails = $_POST['email'];
    $Password = $_POST['pass'];
    $Cpassword = $_POST['cpass'];

    if($Cpassword != $Password){
        ?>
        <script>
        alert("Confirm Password didnot match with New Password.");
        </script>
        <?php
    }else{
        $sel = "SELECT * FROM registrationform WHERE Email='$emails'";
        $res = mysqli_query($con,$sel);
        $count = mysqli_num_rows($res);
        if($count <= 0){
            ?>
            <script>
            alert("Your email id is invalid.");
            </script>
            <?php
        }else{
            $act = mysqli_fetch_array($res);
            $idss = $act['Id'];
            $upda = "UPDATE registrationform SET Password='$Password' WHERE Id='$idss'";
            $res2 = mysqli_query($con,$upda);
            if($res2){
                ?>
                <script>
                alert("Your password is updated.");
                </script>
                <?php
            }else{
                ?>
                <script>
                alert("Your password is not been updated.");
                </script>
                <?php
            }
        }
    }
}
?>