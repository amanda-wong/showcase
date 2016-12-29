// Instagram Ajax call and modal script
var modalBackground = document.querySelector('.modalBackground');
var modalInner = document.querySelector('.modalInner');

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
					var profilePic = el.user.profile_picture;
					var username = el.user.username;
					var caption = el.caption.text;
					var location = el.location.name;
					var img = '\
						<li class="insta-block">\
							<a href="' + imgURL + '" class="insta-link" \
								data-caption="' + caption + '" data-profilePic="' + profilePic + '"\
								data-username="' + username +'" data-location="' + location + '">\
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
			var imageWrap = document.getElementById('imageWrap');
			imageWrap.innerHTML = imageEl;

			var captionEl = document.getElementById('caption');
			var captionText = this.getAttribute('data-caption');

			if(!captionText == '') {
				captionEl.innerHTML = captionText;
			} else {
				var captionWrapEl = document.querySelector('.showCaption');
				imageWrap.nextElementSibling.remove(captionWrapEl);
			}

			modalBackground.style.display = 'flex';
			document.body.style.overflowY = 'hidden';

			var closeIconEl = document.getElementById('closeIcon');
			closeIconEl.addEventListener('click', function(){
				closeModal();
			});
		});
	});
}
