'use strict';
 /*jshint unused:false*/


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

/* Wrap Div around Post Images */

var blogHeader = document.querySelectorAll('.entry-header');

for (var i = 0 ; i < blogHeader.length ; i++ ) {
    var currentHeader = blogHeader[i];
    var headerImg = currentHeader.querySelector('img');
    if (!headerImg) {
        continue;
    }

    var blogImgWrap = document.createElement('div');
    blogImgWrap.appendChild(headerImg);
    currentHeader.insertBefore(blogImgWrap, currentHeader.childNodes[2]);
}
