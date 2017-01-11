'use strict';
 /*jshint unused:false*/

/* skills bar css animation percentage display */
var skillEl = document.querySelectorAll('.skill-level');
window.onload = function() {
	skillEl.forEach(function(el){
		var widthCallBack = setInterval(function(){
			var parentWidth = el.parentNode.scrollWidth;
			var width = el.scrollWidth;
			var percentage = width/parentWidth * 100;
			percentage = Math.floor(percentage);
			el.setAttribute('data-percent', percentage + '%');

			if(percentage == el.style.width.replace('%','')) {
				clearInterval(widthCallBack);
			}
		}, 100);
		var skillpercent = el.getAttribute('data-percent');
		el.style.width = skillpercent;
	});
};

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


// Footer copyright year
var date = new Date();
var year = date.getFullYear();
var yearEl = document.getElementById('year');
yearEl.innerHTML = year;
