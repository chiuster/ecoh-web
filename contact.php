<?php
	require 'autoload.php';
	use Parse\ParseObject;
	use Parse\ParseClient;
  	use Parse\ParseQuery;
  	use Parse\ParseException;

  	$app_id = "DSwIlAcpA7HxiCSYfmqYxbuqnj5OH7Xz151iZ6Qg";
	$rest_key = "Svwmvh1VnDml74CH4UHtfaYMwuBExXDIGvdQgYRF";
	$master_key = "2k1IsyQxy4iyLCTIKTaziZwhbzv5WscwDuY4xDkP";

	ParseClient::initialize( $app_id, $rest_key, $master_key );

	if (isset($_POST['ca']) && isset($_POST['cb']) && isset($_POST['cc']) && isset($_POST['cd']) && isset($_POST['ce'])) {
		$name = $_POST['ca'];
		$email = $_POST['cb'];
		$phone = $_POST['cc'];
		$country = $_POST['cd'];
		$message = $_POST['ce'];

  		$contact = new ParseObject("Contact");
		$contact->set("name", $name);
		$contact->set("email", $email);
		$contact->set("phone", $phone);
		$contact->set("country", $country);
		$contact->set("message", $message);

		$contact->save();
		header("Location: thankyou.html");
  	} else {
		header("Location: index.html");
	}
?>