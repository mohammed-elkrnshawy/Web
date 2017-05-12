<?php
	
	$tpl = 'includes/templates/'; //templets
	$css = 'layout/css/';
	$js = 'layout/js/';
	$lang = 'includes/languages/';


	include $lang. 'english.php';
	include $tpl . 'header.php';

	//Include Navbar In some Pages But Not All Pages

	if (!isset($noNavbar)) {
		include $tpl . 'navbar.php';
	}
