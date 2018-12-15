$(function(){
	base = $('link[rel=base]').attr('href');

	// FACE
	if( $('.sharebox').length >= 1 ){

		$('.facebook a').on('click', function(e){
			var facebook = 'https://www.facebook.com/sharer/sharer.php?u=';
			var openFace = $(this).attr('href');
			window.open( facebook + openFace, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, width=660, height=400");
			e.preventDefault();
		});

	// GOOGLE PLUS

	$('.google a').on('click', function(e){
		var gPlus = 'https://plus.google.com/share?url=';
		var openGPlus = $(this).attr('href');
		window.open( gPlus + openGPlus, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, width=516, height=400");
		e.preventDefault();
	});

	// TWITTER

	$('.twitter a').on('click', function(e){
		var twitter = 'https://twitter.com/share?url=';
		var openTwitter = $(this).attr('href');
		var params = $(this).attr('rel');
		window.open( twitter + openTwitter + params, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, width=660, height=400");
		e.preventDefault();
	});

		// COUNT FACE
		var face = $('.sharebox .facebook a').attr('href');
		$.getJSON('https://graph.facebook.com/?id=' + face, function(response){
			$('.sharebox .facebook .count').text(response.share && response.share.share_count || 0 );
		});

		// COUNT TWITTER
		
		var twitter = 'PublisheWebBr';

		// GOOGLE PLUS
		// var google = $('.sharebox .google a').attr('href');
		
		var profileid = '110700693786942896145';
		var apikey = 'AIzaSyAqlZ1MJSGXMSs8q5WbfvLpZTGJeHLVc2w';
		var url = 'https://www.googleapis.com/plus/v1/people/' + profileid + '?key=' + apikey;
		$.ajax({
			type: "GET",
			dataType: "json",
			url: url,
			success: function (data) {
				var googlefollowcount = data.circledByCount;
				$('.sharebox .google .count').text(googlefollowcount);
			}
		});

	}

});