<?php

	if (empty($_POST['submit'])) {
		echo "Form is not submitted";
		exit;
	}

	if (empty($_POST["fullname"]) || empty($_POST["feedback"]) || empty($_POST["email"])) {
		echo "Please fill the form";
		exit;
	}

	$name = $_POST["fullname"];
	$email = $_POST["email"]
	$feedback = $_POST["feedback"];

	mail('mpyt7410@gmail.com', 'New form submission', 'Name : $name, Email : $email, Feedback : $feedback');
	

?>