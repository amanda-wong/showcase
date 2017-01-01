// Instagram Ajax call and modal script
var modalBackground = document.querySelector('.modal-background');
var modalInner = document.querySelector('.modal-inner');

jQuery(document).ready(function($){
	var token = '36678597.c769071.94c9b79038254991a8af374f77cd33f1';
	$.ajax({
		url: 'https://api.instagram.com/v1/users/self/media/recent',
		dataType: 'jsonp',
		type: 'GET',
		data: {access_token: token},
		success: handleApiResponse
	});
});

window.addEventListener('keydown', function(e){
	if(e.keyCode == '27') {
		closeModal();
	}
});

window.addEventListener('click', function(e){
	if(e.target.contains(modalInner)){
		closeModal();
	}
});

function closeModal() {
	modalBackground.style.display = 'none';
	document.body.style.overflowY = 'auto';
}

function handleApiResponse(data) {
	var instaPosts = data.data;
	console.log(instaPosts);
	var instagrid = jQuery(document.getElementById('instagram-grid'));
	instaPosts.forEach(function(el){
		var tags = el.tags;
		if(tags) {
			tags.forEach(function(tag){
				if(tag == 'amandaoutandabout') {
					var imgURL = el.images.standard_resolution.url;
					var imgWidth = el.images.standard_resolution.width;
					var profilePic = el.user.profile_picture;
					var caption = el.caption.text;
					var location = el.location ? el.location.name : '';
					var likesCount = el.likes.count;
					var dateCreated = el.created_time;
					var img = '\
						<li class="insta-block">\
							<a href="' + imgURL + '" class="insta-link" \
								data-imageWidth="' + imgWidth + '"data-caption="' + caption + '" \
								data-profilePic="' + profilePic + '" data-dateCreated="' + dateCreated + '" \
								data-likes="' + likesCount + '" data-location="' + location + '">\
								<img src="' + imgURL + '" class="insta-img"/>\
							</a>\
						</li>';
					instagrid.append(img);
				}
			});
		}
	});
	registerClickHandlers();
}

function registerClickHandlers() {
	var imageLinks = document.querySelectorAll('.insta-link');
	imageLinks.forEach(function(link){
		link.addEventListener('click', function(e){
			e.preventDefault();
			var imageEl = this.innerHTML;
			var imageWrap = document.getElementById('image-wrap');
			imageWrap.innerHTML = imageEl;

			var captionEl = document.querySelector('.caption');
			var captionText = this.getAttribute('data-caption');

			if(!captionText == '') {
				captionEl.innerHTML = captionText;
			} else {
				var captionWrapEl = document.querySelector('.pic-details');
				imageWrap.nextElementSibling.remove(captionWrapEl);
			}

			var profilePicEl = document.querySelector('.profile-pic');
			var profilePic = this.getAttribute('data-profilePic');
			profilePicEl.innerHTML = '<img src="' + profilePic + '">';

			var locationEl = document.querySelector('.location');
			var locationText = this.getAttribute('data-location');
			locationEl.innerHTML = locationText;

			var likesEl = document.querySelector('.likes');
			var likesNum = this.getAttribute('data-likes');

			if(!likesNum == 0) {
				likesEl.innerHTML = likesNum + ' likes';
			}

			var dateEl = document.querySelector('.date-created');
			var dateString = this.getAttribute('data-dateCreated');
			var dateCreated = new Date(parseInt(dateString) * 1000);
			var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
			var monthCreated = months[dateCreated.getMonth()];
			var dayCreated = dateCreated.getDate();
			var yearCreated = dateCreated.getFullYear();
			var fullDateCreated = monthCreated + ' ' + dayCreated + ', ' + yearCreated;
			dateEl.innerText = fullDateCreated;

			modalBackground.style.display = 'flex';
			document.body.style.overflowY = 'hidden';

			var closeIconEl = document.getElementById('close-icon');
			closeIconEl.addEventListener('click', function(){
				closeModal();
			});
		});
	});
}
