//Virtual Tour Script

var count = 0, previousComponent, shut = true;
var showcase  = document.getElementsByClassName('showcase')[0];
function toggleComponent(component) {

    if (component === previousComponent) {
        if (shut === false) {
            showcase.style.backgroundImage = 'url(img/virtual/allshut.JPG)';
            showcase.style.backgroundPosition = 'center center';
            shut = true;
        } else {
            showcase.style.backgroundImage = 'url(img/virtual/' + component + ')';
            positionImage(component);
            shut = false;
        }
    } else {
        showcase.style.backgroundImage = 'url(img/virtual/' + component + ')';
        positionImage(component);
        shut = false;
    }
    previousComponent = component;
}

function positionImage(component) {
    if (component === 'backDoor.JPG') {
        showcase.style.backgroundPosition = '1px -97.5px';
    } else if (component === 'middleDoor.JPG') {
        showcase.style.backgroundPosition = '-7px -101px';
    } else if (component === 'frontDoor.JPG') {
        showcase.style.backgroundPosition = '5px -98.5px';
    } else if (component === 'trunkTop.JPG') {
        showcase.style.backgroundPosition = 'center -106px';
    } else if (component === 'trunkBottom.JPG') {
        showcase.style.backgroundPosition = 'center -100px';
    }
}