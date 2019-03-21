//Virtual Tour Script
var info = {
    allshut: '',
    backDoor: {
        title: 'Back Door',
        desc: 'This is the backdoor',
    },
    frontDoor: {
        title: 'Front Door',
        desc: 'This is the frontdoor',
    },
    middleDoor: {
        title: 'Middle Door',
        desc: 'This is the middle Door',
    },
    trunkBottom: {
        title: 'Bottom Trunk',
        desc: 'This is the bottom part of the trunk',
    },
    trunkTop: {
        title: 'Top Trunk',
        desc: 'This is the top part of the trunk',
    }
};

var count = 0, previousComponent, shut = true;
var showcase  = document.getElementsByClassName('showcase')[0];
function toggleComponent(e, component) {
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
    var close = component === previousComponent;
    if(e.clientX <= window.innerWidth/2) {
        expandInfoLeft(component, close);
    } else {
        expandInfoRight(component, close);
    }
    previousComponent = component;
}

function expandInfoLeft(id, same) {
    id = id.split('.')[0];
    var stuff = info[id];
    var element = document.getElementsByClassName('expandLeft')[0];
    if (same) {
        hideLeft();
    } else {
        element.childNodes[1].innerHTML = stuff.title;
        element.childNodes[5].innerHTML = stuff.desc;
        element.style.opacity = '1';
        element.style.transform = 'translateX(0px)';
        hideRight();
    }
}

function expandInfoRight(id, same) {
    id = id.split('.')[0];
    var stuff = info[id];
    var element = document.getElementsByClassName('expandRight')[0];
    if(same) {
        hideRight();
    } else {
        element.childNodes[1].innerHTML = stuff.title;
        element.childNodes[5].innerHTML = stuff.desc;
        element.style.opacity = '1';
        element.style.transform = 'translateX(0px)';
        hideLeft();
    }
}

function hideLeft() {
    var element = document.getElementsByClassName('expandLeft')[0];
    element.style.transform = 'translateX(-300px)';
    element.style.opacity = '0';
}

function hideRight() {
    var element = document.getElementsByClassName('expandRight')[0];
    element.style.transform = 'translateX(300px)';
    element.style.opacity = '0';
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