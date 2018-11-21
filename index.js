// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("nav");
var navbar2 = document.getElementsByClassName('navm')[0];
var hamburger = document.getElementsByClassName('glyphicon-menu-hamburger')[0];

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset >= 1) {
        navbar.classList.add("sticky");
        navbar2.classList.add("sticky");
        hamburger.classList.add("gsticky");
    } else {
        navbar.classList.remove("sticky");
        navbar2.classList.remove("sticky");
        hamburger.classList.remove("gsticky");
    }

    if((window.pageYOffset >= 700)&&(window.pageYOffset < 2200)){
        document.getElementsByClassName('backgroundPic')[0].style.backgroundImage = "url(img/coastalHighway.JPG)";
        document.getElementsByClassName('backgroundPic')[0].style.height = "100vh";
        document.getElementsByClassName('backgroundPic')[0].style.filter = "blur(0px)";
    }
    else if(window.pageYOffset >= 2200){
        document.getElementsByClassName('backgroundPic')[0].style.backgroundImage = "url(img/mainBackground.jpg)";
        document.getElementsByClassName('backgroundPic')[0].style.filter = "blur(20px)";
        document.getElementsByClassName('backgroundPic')[0].style.height = "100vh";
        document.getElementsByClassName('backgroundPic')[0].style.height = "700px";
    }
    else {
        document.getElementsByClassName('backgroundPic')[0].style.backgroundImage = "url(img/mainBackground.jpg)";
        document.getElementsByClassName('backgroundPic')[0].style.filter = "blur(0px)";
        document.getElementsByClassName('backgroundPic')[0].style.height = "700px";
    }
}

window.onload = function() {
    document.getElementsByClassName('titleB')[0].style.opacity = '1';
    document.getElementsByClassName('titleB')[1].style.opacity = '1';
    document.getElementsByClassName('titleH')[0].style.top = '0';
};

function scrollo(el) {
    document.getElementById('' + el).scrollIntoView({ behavior: 'smooth', block: 'center' });
    closeNav();
}
var count = 0;
function toggleDoor() {
    console.log(count);
    if(count%2 === 0) {
        document.getElementsByClassName('showcase')[0].style.backgroundImage = "url('img/vehicleTest.jpg')";
        document.getElementsByClassName('showcase')[0].style.backgroundSize = "104%";
        document.getElementsByClassName('showcase')[0].style.backgroundPosition = "-30px -78px";
        count++;
    }
    else {
        document.getElementsByClassName('showcase')[0].style.backgroundImage = "url('img/Vehicle2.jpg')";
        document.getElementsByClassName('showcase')[0].style.backgroundSize = "100%";
        document.getElementsByClassName('showcase')[0].style.backgroundPosition = "center center";
        count++;
    }
}
var expanded = false;
var bar = document.getElementsByClassName('navm')[0];
function expandNav() {
    if(expanded === false){
        bar.classList.add('expandedNav');
        expanded = true;
    }
    else {
        closeNav();
    }
}

function closeNav() {
    bar.classList.remove('expandedNav');
    expanded = false;
}