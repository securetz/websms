<?php
// Step 1: Get the Web SMS API library from https://github.com/secure/websms,
// following the instructions to install it with Composer.
require_once 'src/Class_Web_SMS_API.php';
use WebSMS\WebSMSAPI;
// Step 2: set your API_KEY from https://bulk.websms.co.tz/app/
$api_key = 'YWRtaW46YWRtaW4ucGFzc3dvcmQ=';
// Step 3: Change the from number below. It can be a valid phone number or a String
$from = 'INFO';
// Step 4: the number we are sending to - Any phone number
$contacts= '25500000000';
// Step 5: Replace your Install URL likehttps://bulk.websms.co.tz/app/ with https://bulk.websms.co.tz/app/smsapi//
// <sms/api> is mandatory.
$url = 'https://bulk.websms.co.tz/app/smsapi';
// the sms body
$sms = 'test message from Web SMS';
// unicode sms
$unicode = 0; //For Plain Message
$unicode = 1; //For Unicode Message
// Create SMS Body for request
$sms_body = array(
    'api_key' => $api_key,
    'to' => $contacts,
    'from' => $from,
    'sms' => $sms,
    'unicode' => $unicode,
);
// Step 6: instantiate a new Web SMS API request
$client = new WebSMSAPI();
// Step 7: Send SMS
$response = $client->send_sms($sms_body, $url);
print_r($response);
// Step 8: Get Response
$response=json_decode($response);
// Display a confirmation message on the screen
echo 'Message: '.$response->message;
//Step 9: Get your inbox
$get_inbox=$client->get_inbox($api_key,$url);
//Step 10: Get your account balance
$check_balance=$client->check_balance($api_key,$url);
