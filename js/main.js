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
var textwidget = document.getElementsByClassName('textwidget')[0];
var footerSocial = document.querySelectorAll('.social-icon-wrap a');

for (var i = 1; i < footerSocial.length; i++) {
    var currentIcon = footerSocial[i];
    var iconCopy = currentIcon.cloneNode(true);
    textwidget.appendChild(iconCopy);
}
