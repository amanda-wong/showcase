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
			var instagrid = $(document.getElementById('instagram-grid'));
			instaPosts.forEach(function(el){
				var tags = el.tags;
				if(tags) {
					tags.forEach(function(i){
						if(i == 'amandaoutandabout') {
							var imgURL = el.images.standard_resolution.url;
							var img = '<li class="insta-block"><a href="' + imgURL + '" class="insta-link"><img src="' + imgURL + '" class="insta-img"/></a></li>';
							instagrid.append(img);

						}
					});
				}
			});

			var imageLink = document.querySelectorAll('.insta-link');
			imageLink.forEach(function(igLink){
				igLink.addEventListener('click', function(e){
					e.preventDefault();
					var instaDetails = document.createElement('div');
					instaDetails.className = 'modalBackground';
					var detailsWrap = document.createElement('ul');
					detailsWrap.className = 'detailsOpen';
					var imageEl = this.innerHTML;
					console.log($(this)[0].caption);
					detailsWrap.innerHTML = '<li>' + imageEl + '</li>';
					instaDetails.appendChild(detailsWrap);
					document.body.appendChild(instaDetails);


				});
			});
		}
	});
});

// imgURL = $(this).href;
// console.log(imgURL);
// instaPosts.forEach(function(el){
// 	var imgURL = el.images.standard_resolution.url;
// 	var fullImage = '<li><img src="' + imgURL + '"></></li>';
// 	var fullDetails = document.createElement('li');
// 	var caption = el.caption.text;
// 	fullDetails.innerHTML = caption;
// 	detailsWrap.innerHTML = fullImage + fullDetails;
// 	instaDetails.innerHTML = detailsWrap;
// });
