<?php
        
        /* Get the POST input */
	$postdata = file_get_contents("php://input");
	
	/* Send out a GET request */
        echo file_get_contents($postdata);
        
?>
