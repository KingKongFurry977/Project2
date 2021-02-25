<?php
session_start();
include 'connection.php';

$fname = $_SESSION['name'];
$select = "SELECT * FROM registrationform WHERE FirstName='$fname'";
$res = mysqli_query($con,$select);
$count = mysqli_num_rows($res);
$acts = mysqli_fetch_array($res);
$p0 = $acts['Photo'];
$p1 = $acts['Pic1'];
$p2 = $acts['Pic2'];
$p3 = $acts['Pic3'];
$p4 = $acts['Pic4'];
$p5 = $acts['Pic5'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/phase1.css">
    <link rel="stylesheet" href="CSS/phase2.css">
    <link rel="stylesheet" href="CSS/phase3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Main Page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }
        html{
            font-size: 62.5%;
        }
        .body{
            width: 100vw;
            height: 100vh;
            display: flex;
        }
        .container{
            width: 100%;
            height: 100vh;
            background-image: url(ownerImage/a1.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /* transition: 5s; */

            animation-name: animate;
            animation-direction: alternate-reverse;
            animation-duration: 30s;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-play-state: running;
            animation-timing-function: ease-in-out;
        }
        .phase2 .detail-box{
            position: absolute;
            top: 120%;
            left: 46%;
            min-width: 50vw;
            min-height: calc(100vh - 30vh);
            background-image: url(ownerImage/a6.jpg);
            background-size: 100% 100%;
            box-shadow: 0 10px 20px -6px #fff;
            background-repeat: no-repeat;
        }
        @keyframes animate{
            0%{
                background-image: url(ownerImage/a1.jpg);
            }
            25%{
                background-image: url(ownerImage/a2.jpg);
            }
            50%{
                background-image: url(ownerImage/a3.jpg);
            }
            75%{
                background-image: url(ownerImage/a4.jpg);
            }
            100%{
                background-image: url(ownerImage/a5.jpg);
            }
        }
    </style>
</head>
<body>
    <section class="container">
        <header>
            <div class="search-box">
                <input class="search-txt" type="text" name="" placeholder="Type to search">
                <a href="#" class="search-btn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#" class="sub-menu">Services<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        <ul>
                            <li><a href="#">Link-1</a></li>
                            <li><a href="#">Link-2</a></li>
                            <li><a href="#">Link-3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#" class="sub-menu">Setting<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        <ul>
                            <li><a href="http://localhost:8080/Project2/editProfile.php">Edit Profile</a></li>
                            <li><a href="http://localhost:8080/Project2/editPassword.php">Edit Password</a></li>
                            <li><a href="http://localhost:8080/Project2/editEmail.php">Edit Email</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </header>
        <div class="logo">
            <img src="<?= $p0; ?>" alt="No Network">
        </div>
        <div class="heading">
            <h1>Welcome</h1>
            <h2 data-text="<?= $fname ?>"><?= $fname; ?></h2>
        </div>
        <div class="about">
            <button><a href="#AU">ABOUT US</a></button>
        </div>
    </section>

    <section class="phase2">
        <div class="title" id="AU">ABOUT US</div>
        <div class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur debitis accusantium fugiat totam ducimus doloremque placeat mollitia soluta ipsa ab, nisi labore, eveniet sit saepe architecto fuga. Fuga molestias, nemo accusantium impedit recusandae repudiandae at? Natus saepe accusantium accusamus, eveniet distinctio, expedita dolorem excepturi quia amet nam, veniam minima aspernatur.</div>
        <div class="detail-box">
        </div>
        <div class="about2">
            <button><a href="#GA">GALLERY</a></button>
        </div>
    </section>

    <section class="phase3">
        <div class="t1" id="GA">GALLERY</div>
        <div class="middle">
            <div class="slides">
                <input type="radio" name="r" id="r1" checked>
                <input type="radio" name="r" id="r2">
                <input type="radio" name="r" id="r3">
                <input type="radio" name="r" id="r4">
                <input type="radio" name="r" id="r5">
                <div class="slide s1">
                    <img src="<?= $p1; ?>" alt="no network">
                </div>
                <div class="slide">
                    <img src="<?= $p2; ?>" alt="no network">
                </div>
                <div class="slide">
                    <img src="<?= $p3; ?>" alt="no network">
                </div>
                <div class="slide">
                    <img src="<?= $p4; ?>" alt="no network">
                </div>
                <div class="slide">
                    <img src="<?= $p5; ?>" alt="no network">
                </div>
            </div>
            <div class="navigation">
                <label for="r1" class="bar b1"></label>
                <label for="r2" class="bar"></label>
                <label for="r3" class="bar"></label>
                <label for="r4" class="bar"></label>
                <label for="r5" class="bar"></label>
            </div>
        </div>
        <div class="about3">
            <button class="b1"><a href="#">INFORMATION</a></button>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.menu-toggle').click(function(){
                $('nav').toggleClass('activate')
            })
            $('ul li').click(function(){
                $(this).siblings().removeClass('activate');
                $(this).toggleClass('activate');
            })

            // navigation bar event
            $('.bar').click(function(){
                $('.bar').removeClass('bar1');
                $(this).addClass('bar1');
                $('.bar').removeClass('b1');

            })
        });
    </script>
</body>
</html>