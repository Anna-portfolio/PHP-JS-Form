<?php 

	$email = $firstName = $lastName = $subject = $message = '' ;
	$errors = array('email' => '', 'firstName' => '', 'lastName' => '', 'subject' => '', 'message' => '', 'terms' => '');

	if(isset($_POST['submit'])){
		
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else {
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be valid';
			}
		}

		if(empty($_POST['firstName'])){
			$errors['firstName'] = 'First name is required';
		} else {
			$firstName = $_POST['firstName'];
			if(!preg_match('/^[a-zA-Z]+$/', $firstName)){
				$errors['firstName'] = 'First name must be letters only';
			}
		}

		if(empty($_POST['lastName'])){
			$errors['lastName'] = 'Last name is required';
		} else {
			$lastName = $_POST['lastName'];
			if(!preg_match('/^[a-zA-Z]+$/', $lastName)){
				$errors['lastName'] = 'Last name must be letters only';
			}
		}

		if($_POST['subject'] == ''){
			$errors['subject'] = 'Choose the subject of your message';
		} else {
			$subject = $_POST['subject'];
			if($_POST['subject'] == 'Products' or $_POST['subject'] == 'Services' or $_POST['subject'] == 'Job Openings' or $_POST['subject'] == 'Other'){
			$errors['subject'] = '';
			};
		}

		if((empty($_POST['message'])) or (strlen($_POST['message']) < 10)){
			$errors['message'] = 'The message must be at least 10 characters long';
		} else {
			$message = $_POST['message'];
			if(!preg_match('/^[a-zA-Z0-9!?.,\s]+$/', $message)){
				$errors['message'] = 'The message must be letters, numbers, and punctuation marks only';
			}
		}

		if(empty($_POST['terms'])){
			$errors['terms'] = 'This field is required';
		}  else {
		 	if($_POST['terms'] == '1'){
		 	$errors['terms'] = '';
		 	};
		}

		//EMAIL FUNCTION (works if server's configured)

		// $mailTo = "name@example.com";
		// $headers = "From: ".$email;
		// $txt = "New message from ".$firstName.$lastName.".\n\n".$message;

		// mail($mailTo, $subject, $txt, $headers);

		if(!array_filter($errors)){
			header('Location: form-completed.php');
		}
	}

?>

