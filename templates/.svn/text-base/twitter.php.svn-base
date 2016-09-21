<?php 
require "toa/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
 
define('CONSUMER_KEY', 'uGHnNVve0z8KNI4LCJFq6YG8F');
define('CONSUMER_SECRET', 'Xsvp1qoD5LRybY5UXJL4AZIK54ZPVnWJDj2n2tVMysCY32TDQo');
define('ACCESS_TOKEN', '282079946-9tcLq9oJLMjQwBjQ6RPBGe9GJLE6fpThAtiP7qyC');
define('ACCESS_TOKEN_SECRET', 'VnuMoaErY0zBtPJlJEuFhMP6XUrSZgUZXixbSjiSenobT');
 
$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
$today = date('Y-m-d');

$query = array(
  "q" => array("from:kcstreetcar","result_type=recent")
);


$results = $toa->get('search/tweets', $query);
 
$i = 0;
foreach ($results->statuses as $result) {
// var_dump($result);
  	$link = $result->id_str;
  	$text = $result->text;
  	$user = $result->user->screen_name;
  	$hashtag = $result->entities->hashtags[0]->text;



	if ( $hashtag == "RespectTheRail" || $hashtag == "kcalert" ||  $hashtag == "Testing" ){
		if ($i == 0) {
	echo '<div class="twitter-alert yellow">';
	echo '<div class="twit-contain">';
		echo '</div>';
			echo '<h2>'. $text .'</h2>';
			echo '<a href="https://twitter.com/'. $user .'/status/'. $link .'" target="blank" class="btn twitter"><p>Read More »</p></a>';
	echo '</div>';
	}
	$i++;
	}
	if ( $hashtag == "RideKC" || $hashtag == "kcprogress" ||  $hashtag == "kcstreetcar" ){
		if ($i == 0) {
	echo '<div class="twitter-alert blue">';
	echo '<div class="twit-contain">';
		echo '</div>';
			echo '<h2>'. $text .'</h2>';
			echo '<a href="https://twitter.com/'. $user .'/status/'. $link .'" target="blank" class="btn twitter"><p>Read More »</p></a>';
	echo '</div>';
	}
	$i++;
	}
		

// }

}

 ?>