<?php

	function lang($phrase){
	
		static $lang = array(
		
				//Navbar Links
		'Home_Admin'	 => 'Admin Area',
		'CATEGORIES' 	 => 'Categories',
		'ITEMS' 		 => 'Items',
		'MEMBERS' 		 => 'Members',
		'STATISTICS'     => 'Statistics',
		'LOGS' 			 => 'Logs',  
		
		);
	
	return $lang[$phrase];
} 
