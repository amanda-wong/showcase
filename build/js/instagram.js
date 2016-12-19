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
							var img = '<li class="insta-block"><a href="' + imgURL + '" class="insta-url"><img src="' + imgURL + '" class="insta-img"/></a></li>';
							instagrid.append(img);
						}
					});
				}
			});
		}
	});
});
