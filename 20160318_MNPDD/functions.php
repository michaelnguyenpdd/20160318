<?php
	include('class-theme-methods.php');
	
	function do_main_nav(){
		global $dtm;
		
		$class = "main_nav";
		
		$items_array = 	array (
							array('text' => 'About', 'url' => 'about.php'),
							array('text' => 'Photography', 'url' => 'photography.php'),
							array('text' => 'Design', 'url' => 'design.php'),
							array('text' => 'Development', 'url' => 'development.php'),
							array('text' => 'Contact', 'url' => 'contact.php'),
				
						);
		
		return $dtm -> navigation ($items_array, $class);
	}
	
	function do_html_title($page_title){
		$title = 'Michael Nguyen - '.$page_title;
		return $title;
	}
?>