<?php
 /**
 *
 */
 class View
 {


 	function __construct(){}

 	public function getNav()
 	{
 		if (URI == '/trabalho_web/home' || URI =='/trabalho_web/home/') {
 			require_once 'views/nav_bar_top.php';
 		}
 	}

 	#this function get my content page by URL in my navigator
	function page_content($uri)
	{
		if (!empty($_SESSION['session'])) {
			switch ($uri) {
				case '/trabalho_web/home':
					require_once 'views/load_content.php';
					break;
				case '/trabalho_web/home/':
					require_once 'views/load_content.php';
					break;
				case '/trabalho_web/login'	:
					require_once 'views/login.php';
					break;
				case '/trabalho_web/login/':
					require_once 'views/login.php';
					break;
				# case not found
				default:
					require_once 'views/login.php';
					break;	# code...
			}
		}
		else
		{
			require_once 'views/login.php';
		}


 }
}