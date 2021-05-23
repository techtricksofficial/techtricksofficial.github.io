<?php

	if (empty($_GET['submit'])) {
		echo "Form is not submitted";
		exit;
	}

	if (empty($_GET["fullname"]) || empty($_GET["feedback"]) || empty($_GET["email"])) {
		echo "Please fill the form";
		exit;
	}

	$name = $_GET["fullname"];
	$email = $_GET["email"]
	$feedback = $_GET["feedback"];

	mail('mpyt7410@gmail.com', 'New form submission', 'Name : $name, Email : $email, Feedback : $feedback');
	

?>