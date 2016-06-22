'use strict';
 /*jshint unused:false*/

var elMobileMenu = document.getElementById('mobile-menu-container');

function showMenu() {
    elMobileMenu.style.left = '0px';
    elMobileMenu.style.transition = 'ease 0.3s';
}

function hideMenu() {
    elMobileMenu.style.left = '-250px';
    elMobileMenu.style.transition = 'ease 0.3s';
}
