<?php
//Helper to output Wordpress Pages into the View
//Use Syntax: $this->Wordpress->get_WP('id')['content'];
//
App::uses('AppHelper', 'View/Helper');
class WordpressHelper extends AppHelper {
	public function get_WP($postid) {
		$url = 'https://centerofthewest.org/wp-json/posts/'.$postid.'/';//this is our URL that the API is at.

		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		return json_decode($data,true);
	}

}
?>