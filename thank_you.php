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
    <title>Coastal Kombi</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/kombi.jpg" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet">
</head>
<body>
<div class="backgroundPic"></div>
<nav id="nav" class="row">
    <div class="act home col-md-1" style="margin-left: 20px;" onclick="scrollo('titles')">Home</div>
    <div class="act historyNav col-md-3" onclick="scrollo('history')">History of the Kombi</div>
    <div class="act contactNav col-md-2" onclick="scrollo('contact')">Contact Us</div>
    <div class="temp logo col-md-4"></div>
    <div class="socials col-md-1">
        <div class="insta" onclick="window.open('https://www.instagram.com/njCoastalKombi/', '_blank')"></div>
    </div>
</nav>
<nav class="navm">
    <a href="javascript:void(0);" class="icon" onclick="expandNav()" style="float: left;">
        <span class="glyphicon glyphicon-menu-hamburger"></span>
    </a>
    <div class="act2 home" style="margin-top: 55px;" onclick="scrollo('titles')">Home</div>
    <div class="act2 historyNav" onclick="scrollo('history')">History of the Kombi</div>
    <div class="act2 contactNav" onclick="scrollo('contact')">Contact Us</div>
    <div class="act2 socials">
        <div class="insta" onclick="window.open('https://www.instagram.com/njCoastalKombi/', '_blank')"></div>
    </div>
</nav>
<div class="titleSlide row" id="titles">
    <div class="container">
        <h1 class="titleH">Coastal Kombi</h1>
        <p class="titleB">VolksWagen Bus Rental</p>
        <div class="row titleB">
            <div class="col-md-6">
                <button class="btn btn1" style="background: #00CAF0; color: white;" onclick="scrollo('virtual')">Virtual Tour</button>
            </div>
            <div class="col-md-6">
                <button class="btn btn2" onclick="scrollo('contact')">Contact</button>
            </div>
        </div>
    </div>
</div>
<div class="virtualSlide row" id="virtual">
    <div class="col-md-12">
        <div class="row">
            <h1 class="text-center">Virtual Tour</h1>
        </div>
        <div class="row">
            <div class="showcase">
                <div class="backDoor" onclick="toggleComponent('backDoor.JPG')"></div>
                <div class="middleDoor" onclick="toggleComponent('middleDoor.JPG')"></div>
                <div class="frontDoor" onclick="toggleComponent('frontDoor.JPG')"></div>
                <div class="trunkTop" onclick="toggleComponent('trunkTop.JPG')"></div>
                <div class="trunkBottom" onclick="toggleComponent('trunkBottom.JPG')"></div>
            </div>
        </div>
    </div>
</div>
<div class="jerseyShore row">
    <div class="col-md-12">
        <div class="row h1r">
            <h1 class="text-center" style="color: white; text-shadow: 0 0 5px rgba(0,0,0,.8)">THE COASTAL KOMBI EXPERIENCE</h1>
        </div>
        <div class="row">
            <p><span class="emphasis">For Hire ...</span> <br>

                • A 1977, 10-seat Brazilian import Volkswagen "Kombi" Transporter 2 taxi. <br>

                • Available for photography, staging, business prop, commercials, weddings, etc.<br>

                • Hippie bus rental soon to be available as an "Airbnb Experience."</p>
        </div>
    </div>
</div>
<div class="historyContainer row" id="history">
    <div class="col-md-12">
        <div class="row gifHis">
            <div class="col-md-6 col-md-offset-3" style="background: #000; height:300px;">
                <h1 class="text-center" style="color: white;">History of the Kombi <br> (Put animated gif here)</h1>
            </div>
        </div>
        <div class="row textHis">
            <div class="col-md-5 col-md-offset-1 histScroll">
                <h3>From the Brazil to New Jersey ...</h3>
                <p>
                    "Kombi" originates from the German word Kombinationskraftwagen (combination motor vehicle),
                    with side windows and removable rear seats, both a passenger and a cargo vehicle combined.
                    This  Kombi also fits into the Lotação (share-taxi) class of VW Buses, a version exclusive
                    to Brazil, with 6 front-hinged doors for the passenger area and 4 bench-seats, catering to
                    the supplemental public transport segment. Available from 1960 to 1989, in both the split-window
                    and "clipper" (fitted with the bay-window front panel) body styles.
                </p>
                <p style="margin-top: 24px;">
                    This rare version of the 1977 Volkswagon "Kombi" Transporter was only manufactured for one year in a
                    Brazilian VW factory, and was a special order model for taxi services in the São Paulo, Brazil / South
                    American market. A rare model there and even rarer sight in North America or Europe. There is a lot to
                    learn from seeing a VW bus built outside of Germany. While there are many differences, fundamentally
                    underneath they are all the same. The simplistic "box on wheels" that VW built has been used to haul
                    nearly everything ... especially people!
                </p>
            </div>
            <div class="col-md-5 histScroll hist2">
                <p style="margin-top: 54px;">
                    The tooling from the German plants was sent abroad to the other VW factories and used for many years later.
                    The rear corner windows on this 1977 model had stopped in German production in 1963. It is a very interesting
                    blend of early and late on this VW Bus! Three doors on both sides make for a very interesting look — especially
                    with a front bay window model.
                </p>
                <p style="margin-top: 34px;">
                    Brazil contained the last factory in the world that produced the Transporter of Type 2, which ceased production on
                    December 31, 2013. This marked the end of the era of rear-engine Volkswagens manufacting, which originated in 1935
                    with their Type 1 prototypes.
                </p>
                <p style="margin-top: 34px;">
                    Our "Coastal Kombi" was brought stateside from the mountains of São Paulo, Brazil, via Advance Auto Group Car Collectors of Miami, Florida.
                </p>
                <h4 class="text-center" style="margin-top: 30px;">
                    1.600 cc - 1.6 liters <strong>|</strong> 4 speed – Manual <strong>|</strong> Air-Cooled <strong>|</strong> 60 hp
                </h4>
            </div>
        </div>
    </div>
</div>
<div class="contact row" id="contact">
    <div class="col-md-12">
        <div class="container">
            <h1 style="color: #333;" class="text-center">Contact The Coastal Kombi</h1>
            <div class="col-md-6 text-center" style="padding-top: 20%;">
                <h4>Thank you for contacting the Coastal Kombi</h4>
                <h4>We will contact you shortly!</h4>
            </div>
            <div class="col-md-6 cSocials">
                <div class="row text-center" style="margin-top: 20px;">
                    Instagram: <a href="https://www.instagram.com/njCoastalKombi/" target="_blank">@njcoastalkombi</a> <br>-- Middletown, New Jersey
                </div>
                <div class="row text-center" style="margin-top: 20px;">
                    AirBnb Experience: <a href="#">@Coming Soon</a> <br>-- Monmouth County, New Jersey
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="row" style="padding-top: 50px;">
        <h2 class="text-center" style="z-index: 20; color: white; margin-bottom: 60px;">Place Important Information Here</h2>
        <h4 class="text-center" style="z-index: 20; color: white;">Copyright © 2018 COASTAL KOMBI - All Rights Reserved.</h4>
    </div>
</footer>
<script src="index.js"></script>
<script src="virtual_tour.js"></script>
</body>
</html>
