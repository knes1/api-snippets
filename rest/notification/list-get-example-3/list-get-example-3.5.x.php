<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token = "your_auth_token";
$client = new Client($sid, $token);

$notifications = $client->account->notifications->read(
    array("messageDate" => "2009-07-06", "log" => "1")
);
// Loop over the list of notifications and echo a property for each one
foreach ($notifications as $notification) {
    echo $notification->requestUrl;
}
