// for animations 
AOS.init({
    once: true,
    disable: false,
});

// for mobile menu 
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


// for toggle 
$(document).ready(function () {
    $(".wish-icon i").click(function () {
        $(this).toggleClass("fa-heart fa-heart-o");
    });
});


// for custom effect 
function hoverclick() {
    var dataid = document.getElementById('imgid')
    dataid.style.transform = "rotate(0deg)";

}


// for mobile dropdown 
function myFunction() {
    var element = document.getElementById("myDIV");
    element.classList.toggle("mydropstyle");
}