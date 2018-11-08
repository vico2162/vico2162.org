<?php
$message = "";
$email = $_POST["toEmail"];

foreach($_POST as $key => $value)
{
$message .= $key . " : " . $value . "\n";
}

if (empty($_POST["toEmail"])) {
	echo "<h1> ERROR </h1>";
	echo "No toEmail defined";
} else {
	if (mail($_POST["toEmail"],"FeedBack Form",$message)){
    	echo "<h1>success</h1>";
    	echo "email sent";
	} else {
    	echo "<h1>Failure</h1>";
    	echo "email NOT sent";
	}	
}
?>
