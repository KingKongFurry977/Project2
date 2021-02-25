<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/registration.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registration Form</title>
    <style>
        body{
            width: 100vw;
            height: 100vh;
            background: url(ownerImage/a7.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        </style>
</head>
<body>
    <h1 id="rf" data-text="Registration Form...">Registration Form...</h1>
    <div class="container">
        <h1 class="textHide">king</h1>
        <div class="verticalLine"></div>
        <form method="POST" enctype="multipart/form-data">
            <a href="http://localhost:8080/Project2/login.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>   
            <div class="inputBoxLeft">
                <input type="text" name="fname" id="" autocomplete="off" required>
                <label for="name" class="">First Name*</label>
            </div>
            <div class="inputBoxRight">
                <input type="text" name="lname" id="" autocomplete="off" required>
                <label for="name" class="">Last Name*</label>
            </div>
            <div class="inputBoxLeft">
                <input type="file" name="pic0" id="" required>
                <label for="name" class="" id="l1">Your Photo*</label>
            </div>
            <div class="inputBoxRight">
                <input type="email" name="email" id="" autocomplete="off" required>
                <label for="name" class="">Email Id*</label>
            </div>
            <div class="inputBoxLeft showHide">
                <input type="password" class="pswrd" name="pass" id="" autocomplete="off" required>
                <span class="show">Show</span>
                <label for="name" class="">Password*</label>
            </div>
            <div class="inputBoxRight">
                <input type="text" name="rpass" id="" autocomplete="off" required>
                <label for="name" class="">Re-Password*</label>
            </div>
            <div class="galleryBox">
                <input type="file" name="pic1" id="" required>
                <input type="file" name="pic2" id="" required>
                <input type="file" name="pic3" id="" required>
                <input type="file" name="pic4" id="" required>
                <input type="file" name="pic5" id="" required>
                <label for="name" class="" id="l1">Gallery Photo*</label>
            </div>
            <div class="selectOption">
                <select name="gender" id="">
                    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <label for="name" class="">Gender*</label>
            </div>
            <div class="selectOption">
                <select name="degree" id="down1">
                    <option value=""></option>
                    <option value="Bsc.IT">Bsc.IT</option>
                    <option value="BCA">BCA</option>
                    <option value="Bcom">Bcom</option>
                    <option value="MCA">MCA</option>
                    <option value="Msc.IT">Msc.IT</option>
                    <option value="B.Tech">B.Tech</option>
                </select>
                <label for="name" id="down2">Degree*</label>
            </div>
            <input type="submit" name="submit" class="submit" value="Submit">
        </form>
    </div>

    <script>
        var input = document.querySelector('.pswrd');
        var show = document.querySelector('.show');
        show.addEventListener('click', active);
        function active(){
            if(input.type === "password"){
                input.type = "text";
                show.style.color = "#1DA1F2";
                show.textContent = "Hide";
            }else{
                input.type = "password";
                show.style.color = "#fff";
                show.textContent = "Show";
            }
        }
    </script>
</body>

</html>

<?php
if(isset($_POST['submit'])){
    $firstname = $_POST['fname'];
    $len1 = strlen($firstname);
    $lastname = $_POST['lname'];
    $len2 = strlen($lastname);
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $len = strlen($password);
    $rpassword = $_POST['rpass'];
    $gender = $_POST['gender'];
    $degree = $_POST['degree'];
    $token = bin2hex(random_bytes(15));
    $file0 = $_FILES['pic0'];
    $file1 = $_FILES['pic1'];
    $file2 = $_FILES['pic2'];
    $file3 = $_FILES['pic3'];
    $file4 = $_FILES['pic4'];
    $file5 = $_FILES['pic5'];

    // for file0
    $filename0 = $file0['name'];
    $filepath0 = $file0['tmp_name'];
    $fileerror0 = $file0['error'];
    if($fileerror0 == 0){
        $destinationFile0 = 'userImage/'.$filename0;
        move_uploaded_file($filepath0, $destinationFile0);
    }

    // for file1
    $filename1 = $file1['name'];
    $filepath1 = $file1['tmp_name'];
    $fileerror1 = $file1['error'];
    if($fileerror1 == 0){
        $destinationFile1 = 'userImage/'.$filename1;
        move_uploaded_file($filepath1, $destinationFile1);
    }

    // for file2
    $filename2 = $file2['name'];
    $filepath2 = $file2['tmp_name'];
    $fileerror2 = $file2['error'];
    if($fileerror2 == 0){
        $destinationFile2 = 'userImage/'.$filename2;
        move_uploaded_file($filepath2, $destinationFile2);
    }

    // for file3
    $filename3 = $file3['name'];
    $filepath3 = $file3['tmp_name'];
    $fileerror3 = $file3['error'];
    if($fileerror3 == 0){
        $destinationFile3 = 'userImage/'.$filename3;
        move_uploaded_file($filepath3, $destinationFile3);
    }

    // for file4
    $filename4 = $file4['name'];
    $filepath4 = $file4['tmp_name'];
    $fileerror4 = $file4['error'];
    if($fileerror4 == 0){
        $destinationFile4 = 'userImage/'.$filename4;
        move_uploaded_file($filepath4, $destinationFile4);
    }

    // for file5
    $filename5 = $file5['name'];
    $filepath5 = $file5['tmp_name'];
    $fileerror5 = $file5['error'];
    if($fileerror5 == 0){
        $destinationFile5 = 'userImage/'.$filename5;
        move_uploaded_file($filepath5, $destinationFile5);
    }

    // file part checking
    // $j = 0;
    // $i = 0;
    // for($i=0; $i<=5; $i++){
        // $filename[$i] = $file[$i]['name'];
        // $filepath[$i] = $file[$i]['tmp_name'];
        // $fileerror[$i] = $file[$i]['error'];

        //validation process for image
        // $file_ext[$i] = explode('.', $filename[$i]);
        // $file_ext_check[$i] = strtolower(end($file_ext[$i]));
        // $valid = array('jpg','png','jpeg');

    //     if($fileerror[$i] == 0){
    //         $destinationFile[$i] = 'userImage/'.$filename[$i];
    //         move_uploaded_file($filepath[$i], $destinationFile[$i]);
    //         if(in_array($file_ext_check[$i], $valid)){
    //             $destinationFile[$i] = 'userImage/'.$filename[$i];
    //             // move_uploaded_file(filename, destination);  it is a syntax
    //             move_uploaded_file($filepath[$i], $destinationFile[$i]);
    //         }else{
    //             ?>
    //             <script type="text/javascript">
    //             alert("Image Extension is not valid");
    //             </script>
    //             <?php
    //         }
    //     }
    // }

    if(($len1 <= 2) && ($len2 <= 2)){
        ?>
        <script type="text/javascript">
        alert("Should be atleast 3 character or more");
        </script>
        <?php
    }elseif($len <= 7){
        ?>
        <script type="text/javascript">
        alert("Password Should not be less than 8 character");
        </script>
        <?php
    }elseif($rpassword != $password){
        ?>
        <script type="text/javascript">
        alert("Re-Password didnot match with Password");
        </script>
        <?php
    }else{
        $insertQuery = "INSERT INTO registrationform(FirstName,LastName,Photo,Email,Password,Gender,Degree,Pic1,Pic2,Pic3,Pic4,Pic5,Token,Status) VALUES ('$firstname','$lastname','$destinationFile0','$email','$password','$gender','$degree','$destinationFile1','$destinationFile2','$destinationFile3','$destinationFile4','$destinationFile5','$token','inactive')";
        $res = mysqli_query($con,$insertQuery);

        if($res){
            ?>
            <script type="text/javascript">
            alert("Resgistration Successful.");
            location.href = `http://localhost:8080/Project2/login.php`;
            </script>
            <?php
        }else{
            ?>
            <script type="text/javascript">
            alert("Registration Unsuccessful.");
            </script>
            <?php
        }
    }

}

?>