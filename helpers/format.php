<?php

class Format{
	public function formatDate($date){
		return data('F j, Y, g:i a', strtotime($date));
	}

	public function textShorter($text, $limit = 400){
		$text = $text . " ";
		$text = substr($text, 0, $limit);
		$text = substr($text, 0, strrpos($text, ' '));
		$text = $text.".....";
		return $text;
	}

	public function validation($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		return $data;
	}

	public function title()	
	{
		$path = $_SERVER('SCRIPT_FILENAME');
		$title = basename($path, '.php');

		if($title == 'index'){
			$title = 'home';
		}
		return $title = ucfirst($title);
	}
}

?>