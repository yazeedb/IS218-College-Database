<?php
	ini_set('display_errors', 1);
	include 'Autoloader.php';

	$pageType = $_GET['pageType'];
	$class = "classes\\pages\\{$pageType}";

	if(empty($_GET)) {
		$page1 = new classes\pages\Main;
	} else {
		$page1 = new $class;
	}

/* 
1.  Create a web page that shows the colleges that have the highest enrollment

2.  Create a web page that that lists the colleges with the largest amount of total liabilities

3.  Create a web page that lists the colleges with the largest amount of net assets

4.  Create a web page that lists the colleges with the largest amount of net assets per student.
5. Create a web page that shows the colleges with the largest percentage increase in enrollment between the years of 2011 and 2010.
*/
?> 