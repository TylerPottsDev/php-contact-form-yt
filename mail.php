<?php

require 'vendor/autoload.php';

$apiKey = "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";

$email = new \SendGrid\Mail\Mail();
$email->setFrom($_POST['email'], "Contact Form");
$email->setSubject("[Test] " . $_POST['subject']);
$email->addTo("tylerpottsdev@gmail.com", "Tyler Potts");
$email->addContent(
	"text/html",
	"<h1>Contact Form Email</h1>" .
	"<div>Name: " . $_POST['name'] . "<div>" .
	"<div>Email: " . $_POST['email'] . "<div>" .
	"<div>Message: " . $_POST['message'] . "<div>"
);

$sg = new \SendGrid($apiKey);

try {
	$response = $sg->send($email);

	header("location: /?success=" . $response->statusCode());
} catch (Exception $e) {
	header("location: /?success=0");
}
