<?php
	include 'Autoloader.php';

	$pageType = $_GET['pageType'];
	$class = "classes\\pages\\{$pageType}";

	if(empty($_GET)) {
		$page1 = new classes\pages\Main;
	} else {
		$page1 = new $class;
	}
?> 