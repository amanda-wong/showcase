// Instagram AJAX call

jQuery(document).ready(function($){
    var instaData = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=36678597.c769071.94c9b79038254991a8af374f77cd33f1';

    $.ajax(instaData, success: function(result) {
        jQuery('.instagram').html(result);
    });
});
