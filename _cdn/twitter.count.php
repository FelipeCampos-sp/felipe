<?php
	require_once('TwitterAPIExchange.php');
	$settings = array(
		'oauth_access_token' => "937671111759851520-AiTi9HP3BvIsaQlJiPrOYD3bBMjfO3Z",
		'oauth_access_token_secret' => "EyLcQx1Y5DosJgV2iLQz1OIxAnabPIo5t7MDeOBhDRHFR",
		'consumer_key' => "a8JdIM0b216fODgGcnJvoBo2q",
		'consumer_secret' => "cgSyHVpr9avr41QJnVpxErhRdi426Ib8yZAfJz5dllwG4mBF0p"
	);

	$url = 'https://api.twitter.com/1.1/users/show.json';
	$getfield = '?screen_name=PublisheWebBr';
	$requestMethod = 'GET';

	$twitter = new TwitterAPIExchange($settings);
	$output =  $twitter->setGetfield($getfield)
	->buildOauth($url, $requestMethod)
	->performRequest();


	$rs = json_decode($output, true);
	echo $rs['followers_count'];

?>