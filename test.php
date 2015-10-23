<?php

include_once "proxy.php";

$object = new myProxy\HTTP_Proxy();
$printer = $object->getURL("");

echo $printer;

?>
