<?php
error_reporting(0);	
	$obj = json_decode(json_encode($_POST));
	//print $obj->{'name'};
	$name = $obj->{'name'};
	$email = $obj->{'email'};
	$subject = $obj->{'subject'};
	$message = $obj->{'message'};


	$to = "ayalarodrigo50@gmail.com";
	
	mail($to,$subject,$message,$email);
	
	echo "OK";
?>