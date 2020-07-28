<?php

function hit_count() {
	$filename = 'non u2.txt';
	$handle = fopen('$filename', 'r');
	$current = fread($handle,filesize($filename));

	echo $current_inc = $current + 1;

}

?>