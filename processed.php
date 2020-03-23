<?php

	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$state = $_POST['state'];
		$gender = $_POST['gender'];
		$message = $_POST['message'];
		$email = $_POST['email'];

		echo $name . '\'s Form <br><br><br>';
		echo ' Hi there ' .$name. ' , These are the details of your submission: <br> <br><br>
			name : '. $name .' <br> email : '. $email .' <br> state : '. $state .' <br> gender : '. $gender .' <br> message : ' . $message ;

	};



?>
