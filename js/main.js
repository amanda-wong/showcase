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

/* Wrap Div Around Post Images */

// var blogHeader = document.querySelectorAll('.entry-header');
//
// for (var i = 0 ; i < blogHeader.length ; i++ ) {
//     var currentHeader = blogHeader[i];
//     var headerImg = currentHeader.querySelector('img');
//     if (!headerImg) {
//         continue;
//     }
//
//     var blogImgWrap = document.createElement('div');
//     blogImgWrap.appendChild(headerImg);
//     currentHeader.insertBefore(blogImgWrap, currentHeader.childNodes[2]);
// }

//Inject HTML content into Text Widget


var footerSocial = document.getElementsByClassName('social-icon-wrap')[0].children;
var socialIcons = footerSocial.cloneNode;
// var copy = footerSocial.cloneNode;
var textWidget = document.getElementsByClassName('widget')[0].childNodes[2].outerHTML;
textWidget.appendChild(socialIcons);
