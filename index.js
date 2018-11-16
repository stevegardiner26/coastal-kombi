// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("nav");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset >= 1) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }

    if((window.pageYOffset >= 700)&&(window.pageYOffset < 2100)){
        document.getElementsByClassName('backgroundPic')[0].style.backgroundImage = "url(img/boardwalk.jpg)";
        document.getElementsByClassName('backgroundPic')[0].style.height = "100vh";
        document.getElementsByClassName('backgroundPic')[0].style.filter = "blur(0px)";
    }
    else if(window.pageYOffset >= 2100){
        document.getElementsByClassName('backgroundPic')[0].style.backgroundImage = "url(img/background.jpg)";
        document.getElementsByClassName('backgroundPic')[0].style.filter = "blur(20px)";
        document.getElementsByClassName('backgroundPic')[0].style.height = "100vh";
    }
    else {
        document.getElementsByClassName('backgroundPic')[0].style.backgroundImage = "url(img/background.jpg)";
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
}