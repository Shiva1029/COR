<?php

	$postdata = file_get_contents("php://input");

    echo file_get_contents($postdata);
?>