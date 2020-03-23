<?php

	if(isset($_POST['submit'])) {

		$file = fopen($_POST['first_name'] . '.txt', 'w');

		fwrite( $file, 'First name: ' . $_POST['first_name'] . " ;\n  ");
		fwrite( $file, 'Last name: ' . $_POST['last_name'] . " ;\n ");
		fwrite( $file, 'Email: ' . $_POST['email'] . " ;\n ");
		fwrite( $file, 'State: ' . $_POST['state'] . " ;\n ");
		fwrite( $file, 'Gender: '. $_POST['gender'] . " ;\n ");
		fwrite( $file, 'Message: '. $_POST['message'] . " ;\n ");




		fclose($file);

		header('location: phptask.php');

	}




?>
