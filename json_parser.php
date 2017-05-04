<?php
$string = file_get_contents("diploma_12clase.json");
$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($string, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        echo "$key:\n<br/>";
    } else {
        echo "$key => $val\n<br/>";
    }
	
}