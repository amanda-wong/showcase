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
					var closeIcon = '<i class="material-icons closeIcon" id="closeIcon">clear</i>';
					modalBackground.innerHTML = closeIcon;

					var detailsWrap = document.createElement('div');
					detailsWrap.className = 'detailsWrap';
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

					detailsWrap.appendChild(imageWrap);
					detailsWrap.appendChild(captionWrap);
					modalBackground.appendChild(detailsWrap);
					document.body.appendChild(modalBackground);
					document.body.style.overflowY = 'hidden';

					window.addEventListener('keydown', function(e){
						if(e.keyCode == '27') {
							closeModal();
						}
					});
					window.addEventListener('click', function(e){
						var closeIconEl = document.getElementById('closeIcon');
						if(e.target.contains(detailsWrap) || e.target.contains(closeIconEl)){
							closeModal();
						}
					});

					function closeModal() {
						document.body.removeChild(modalBackground);
						document.body.style.overflowY = 'auto';
					}
				});
			});
		}
	});
});
