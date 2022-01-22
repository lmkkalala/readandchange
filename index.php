<?php 
	$file  =  fopen('file.txt','r+');
	$to_search = "/[lorem ipsum]/i";
	$text = 'Hello world';
	$newtext = preg_replace($to_search, "[".$text."]", $file);
	fwrite($file,'['.$text.']');
	echo "<script>console.log('".$text."')</script>";
	fclose($file);
?>