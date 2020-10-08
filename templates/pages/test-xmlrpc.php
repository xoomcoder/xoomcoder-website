<?php

use Incutio\XMLRPC\Client\Base as IXR_Client;

echo "(1)";

// https://wpformation.com/ping-wordpress/
// $client = new IXR_Client('http://rpc.pingomatic.com/');
$client             = new WP_HTTP_IXR_Client( 'http://rpc.pingomatic.com/' );

echo "(2)";

if (!$client->query('weblogUpdates.ping', 'xoomcoder', 'https://xoomcoder.com/')) {
   die('An error occurred - '.$client->getErrorCode().":".$client->getErrorMessage());
}
print $client->getResponse();

echo "(3)";

