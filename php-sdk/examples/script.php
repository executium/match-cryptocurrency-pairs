<?php

/*
	File: script.php
	Endpoint: user/active-sessions
	System: User
	Name: Active Sessions
*/
	
# Include config and class
include './config.php';
include '../src/class.php';

# Declare your key and secret
$obj = new ApiAccess($key,$secret);

# Declare endpoint
$endpoint='system/symbols';

# Parameters required (These are sent as POST)
$input=array();
$input['exchange']='binance';

#
$result = $obj->send($endpoint,$input,array());

# Result
echo '<pre>';
	print_r($result);
echo '</pre>';

?>	
