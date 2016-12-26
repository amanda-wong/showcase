// Instagram AJAX call

jQuery(document).ready(function($){
	var token = '36678597.c769071.94c9b79038254991a8af374f77cd33f1';
	$.ajax({
		url: 'https://api.instagram.com/v1/users/self/media/recent',
		dataType: 'jsonp',
		type: 'GET',
		data: {access_token: token},
		success: function(data){
			var instaPosts = data.data;
			console.log(instaPosts);
			var instagrid = $(document.getElementById('instagram-grid'));
			instaPosts.forEach(function(el){
				var tags = el.tags;
				if(tags) {
					tags.forEach(function(i){
						if(i == 'amandaoutandabout') {
							var imgURL = el.images.standard_resolution.url;
							var caption = el.caption.text;
							var img = '\
								<li class="insta-block">\
									<a href="' + imgURL + '" class="insta-link" data-caption="' + caption + '">\
										<img src="' + imgURL + '" class="insta-img"/>\
									</a>\
								</li>';
							instagrid.append(img);
						}
					});
				}
			});

			var imageLink = document.querySelectorAll('.insta-link');
			imageLink.forEach(function(igLink){
				igLink.addEventListener('click', function(e){
					e.preventDefault();
					var modalBackground = document.createElement('div');
					modalBackground.className = 'modalBackground';
					var clearIcon = '<i class="material-icons closeModal" id="closeModal">clear</i>';
					modalBackground.innerHTML = clearIcon;

					var imageWrap = document.createElement('div');
					imageWrap.className = 'showImage';
					var captionWrap = document.createElement('div');


					var captionEl = document.createElement('p');
					var captionText = this.getAttribute('data-caption');
					captionEl.innerHTML = captionText;
					captionWrap.appendChild(captionEl);
					captionWrap.className = 'showCaption';


					var imageEl = this.innerHTML;
					imageWrap.innerHTML = '<div>' + imageEl + '</div>';

					modalBackground.appendChild(imageWrap);
					modalBackground.appendChild(captionWrap);
					document.body.appendChild(modalBackground);
					document.body.style.overflowY = 'hidden';

					var closeModal = document.getElementById('closeModal');

					closeModal.addEventListener('click', function(e){
						e.preventDefault();
						document.body.removeChild(modalBackground);
						document.body.style.overflowY = 'auto';
					});
				});
			});
		}
	});
});
