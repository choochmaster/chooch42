<?php 
session_start();
if(isset($_GET['lang'])){
	$lang = $_GET['lang'];
	if($lang == "en" || $lang == "fr" || $lang == "es"){
		unset($_SESSION['lang']);
		$_SESSION['lang'] = $lang;
		header ("Refresh: 1;URL=index"); 
		echo 'Language changed successfully.</br>Wait..';
		die();
	}
	header ("Refresh: 1;URL=index"); 
	echo'Language not found.</br>Wait..';
	die();
}


?>