<?php

$server = 'http';

// Check if the request is using HTTPS

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {

    $server .= 's';

}

// Add the host name

$server .= '://' . $_SERVER['HTTP_HOST'];

// Get the server's IP address

$serverIP = $_SERVER['SERVER_ADDR'];

// Define a list of local server IP addresses or hostnames

$localServerIPs = array('127.0.0.1', '::1', 'localhost');

$hosted = array(''); // Add your hosted server IP addresses or hostnames here

// Check if the server's IP is in the list of local server IPs

if (in_array($serverIP, $localServerIPs)) {

    // echo "This is a local server.";

    $server .= '/dashboard/drm-php/pages/';

} elseif (in_array($serverIP, $hosted)) {

    // echo "This is a local server.";

    $server .= '/dashboard/drm-php/pages/';

} else {

    // echo "This is a remote server.";

    $server .= '/dashboard/drm-php/pages/';

}


?>