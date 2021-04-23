<?php
	/*
		Plugin Name: wordcount
		Version: 1.0
	*/
    
    function wordcount($str){

    $words = str_word_count($str);
    return $str." [".$words.']'. " Total words.";
}

  add_filter('the_content','wordcount');

?>


