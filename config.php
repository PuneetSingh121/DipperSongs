<?php
	session_start();
	require_once "Facebook/autoload.php";

	$FB= new \Facebook\Facebook([
		'app_id' => '1595257863853573',
		'app_secret' => '28723aef9138cbeab0dddd1fa72c4730',
		'default_graph_version' => 'v2.11'
		]);

	$helper =$FB->getRedirectLoginHelper();
?>
