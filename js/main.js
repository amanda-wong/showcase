'use strict';
 /*jshint unused:false*/

var elMobileMenu = document.getElementById('mobile-menu-container');

window.onresize = function() {
    hideMenu();
};

function showMenu() {
    elMobileMenu.style.left = '0px';
}

function hideMenu() {
    elMobileMenu.style.left = '-250px';
}
