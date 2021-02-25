<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Login Form</title>
    <style>
        .bg-img{
            background: url(ownerImage/a8.jpg);
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        .bg-img::after{
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0,0,0,0.7);
        }
    </style>
</head>
<body>
    <div class="bg-img">
        <div class="text-box">
            <span>L</span>
            <span>O</span>
            <span>G</span>
            <span>I</span>
            <span>N</span>
            <span>-</span>
            <span>F</span>
            <span>O</span>
            <span>R</span>
            <span>M</span>
        </div>
        <div class="content">
            <header>Login Form</header>
            <form method="POST">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="email" id="" placeholder="Email Id" required>
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="password" name="password" id="" placeholder="Password" required>
                    <span class="show">SHOW</span>
                </div>
                <div class="pass">
                    <a href="http://localhost:8080/Project2/forgetpassword.php">Forget Password?</a>
                </div>
                <div class="field">
                    <input type="submit" name="login" value="LOGIN">
                </div>
                <div class="login">Or login with</div>
                <div class="link">
                    <div class="facebook">
                        <i class="fab fa-facebook-f"><span>Facebook</span></i>
                    </div>
                    <div class="instagram">
                        <i class="fab fa-instagram"><span>Instagram</span></i>
                    </div>
                </div>
                <div class="signup">Don't have an account?
                    <a href="http://localhost:8080/Project2/registrationForm.php">Signup Now</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        const pass_field = document.querySelector('.password');
        const show = document.querySelector('.show');
        show.addEventListener('click', active);
        function active(){
            if(pass_field.type === "password"){
                pass_field.type = "text";
                show.style.color = "#3498db";
                show.textContent = "HIDE";
            }else{
                pass_field.type = "password";
                show.style.color = "#222";
                show.textContent = "SHOW";
            }
        }
    </script>
</body>
</html>

<?php
if(isset($_POST['login'])){
    $emailId = $_POST['email'];
    $pass = $_POST['password'];

    $select = "SELECT * FROM registrationform WHERE Email='$emailId'";
    $res = mysqli_query($con,$select);
    $count = mysqli_num_rows($res);
    $act = mysqli_fetch_array($res);
    $e = $act['Email'];
    $p = $act['Password'];
    $f = $act['FirstName'];
    $_SESSION['name'] = $f;

    if($count === 0){
        ?>
        <script>
        alert("Cannot login. Invalid Id.");
        </script>
        <?php
    }elseif(($count > 0) && ($pass != $p)){
        ?>
        <script>
        alert('Cannot login. Invalid Password!');
        </script>
        <?php
    }else{
        ?>
        <script>
        alert('Login Successful.');
        location.href = `http://localhost:8080/Project2/main.php`;
        </script>
        <?php
    }
}
?>