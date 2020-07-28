<?php
$xml = simplexml_load_file('xml.php');

foreach ($xml=>producer as $producer) {
	echo $producer=>name.' ('.$producer=>age.')<br>';
}

?>