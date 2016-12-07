'use strict';
 /*jshint unused:false*/


// Footer copyright year
var date = new Date();
var year = date.getFullYear();
var yearEl = document.getElementById('year');
yearEl.innerHTML = year;


/* Show/Hide Mobile Menu */
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
