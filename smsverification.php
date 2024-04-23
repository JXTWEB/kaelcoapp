<?php

$id = "ACf301e0a2691223a5da58c07906b43745";
$token = "6a3ebdcfd51d2b8242fda47a7807b05e";
$url = "https://api.twilio.com/2010-04-01/Accounts/$id/Messages.json";
$from = "+17628210462";
$to = "+639774498648"; // AUTO EXECUTE SMS AHIHI !
$body = "SMS NOTICE FORM JEFF HEHE !";
$data = array (
    'From' => $from,
    'To' => $to,
    'Body' => $body,
);
$post = http_build_query($data);
$x = curl_init($url );
curl_setopt($x, CURLOPT_POST, true);
curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
curl_setopt($x, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($x, CURLOPT_USERPWD, "$id:$token");
curl_setopt($x, CURLOPT_POSTFIELDS, $post);
$y = curl_exec($x);
curl_close($x);
var_dump($post);
var_dump($y);

?>