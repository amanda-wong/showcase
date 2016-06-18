'use strict';
 /*jshint unused:false*/

var elMobileMenu = document.getElementById('mobile-menu-container');

function showMenu() {
    elMobileMenu.style.left = '0px';
}

function hideMenu() {
    elMobileMenu.style.left = '-250px';

    if (window.screen.width >= 480) {
        elMobileMenu.style.left = '-250px';
    }
}
