<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 11/26/2018
 * Time: 7:23 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Designed and Built By Steven Gardiner 9/6/2018 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coastal Kombi</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/kombi.jpg" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.0/dist/ionicons.js"></script>
</head>
<body>
<div class="container-fluid" style="padding: 0;">
    <div class="backgroundImage"></div>
    <nav class="navdesktop navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a onclick="location.href='/index.php'" class="nav-link">Coastal Home</a>
            </li>
            <li class="nav-item">
                <a onclick="location.href='/index.php'" class="nav-link">History of the Kombi</a>
            </li>
            <li class="nav-item">
                <a onclick="location.href='/index.php'" class="nav-link">Contact</a>
            </li>
            <li class="nav-item socials">
                <a class="insta" onclick="window.open('https://www.instagram.com/njCoastalKombi/', '_blank')"></a>
            </li>
        </ul>
    </nav>
    <nav class="navm navbar">
        <ul class="navbar-nav">
            <li class="nav-item2">
                <a href="javascript:void(0);" class="icon" onclick="expandNav()" style="float: left;">
                    <ion-icon name="menu"></ion-icon>
                </a>
            </li>
            <li class="nav-item2">
                <a onclick="location.href='/index.php'" class="nav-link">Coastal Home</a>
            </li>
            <li class="nav-item2">
                <a onclick="location.href='/index.php'" class="nav-link">History of the Kombi</a>
            </li>
            <li class="nav-item2">
                <a onclick="location.href='/index.php'" class="nav-link">Contact</a>
            </li>
            <li class="nav-item2 socials">
                <a class="insta" onclick="window.open('https://www.instagram.com/njCoastalKombi/', '_blank')"></a>
            </li>
        </ul>
    </nav>
    <section class="contact row no-gutters" id="contact">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <h1 style="color: #333; width: 100%;" class="text-center">Contact The Coastal Kombi</h1>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                            echo "<p style='width: 100%; text-align: center; margin-top: 20px;'>Thank you for contacting us!<br>We will be in touch shortly!</p>"
                        ?>
                        <button onclick="location.href='/index.php'" class="btn" style="color:white;background:#00C1E5;font-size: 24px;height: 36px;width:100%;">Back to the Kombi!</button>
                    </div>
                    <div class="col-md-6 cSocials" style="margin-bottom: 20px;">
                        <div class="row no-gutters text-center" style="margin-top: 20px;">
                            Instagram: <a href="https://www.instagram.com/njCoastalKombi/" target="_blank">@njcoastalkombi</a>-- Middletown, New Jersey
                        </div>
                        <br>
                        <div class="row no-gutters text-center" style="margin-top: 20px;">
                            AirBnb Experience: <a href="#">@Coming Soon</a>-- Monmouth County, New Jersey
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div style="padding-top: 50px; padding-bottom: 20px;">
            <h2 class="text-center" style="z-index: 20; color: white; margin-bottom: 60px;">Place Important Information Here</h2>
            <h6 class="text-center footer-copyright py-3" style="z-index: 16; color: white;">© 2018 Copyright: COASTAL KOMBI - All Rights Reserved.</h6>
        </div>
    </footer>
</div>
</body>
</html>