<?php

include_once "proxy.php";

// Decode the input JSON POST data into an object
$postdata = json_decode(file_get_contents("php://input")); 
// For Associate Array 
//$postdata = json_decode(file_get_contents("php://input"), true); 

if ($postdata) {
	$object = new myProxy\HTTP_Proxy();
	$printer = $object->getURL($postdata->{'url'}, $postdata->{'oauth'});
	// For Associative Array
	// $printer = $object->getURL($postdata["url"], $postdata->["oauth"]);

	echo $printer;
}

else {
	echo "undefined session";
}

?>
