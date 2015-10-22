<?php
        
        /* Get the POST input */
	$postdata = file_get_contents("php://input");
	
	/* Send out a GET request and print the response */
        echo file_get_contents($postdata);
        
?>
