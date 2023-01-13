<?php

	require_once('config.php');

	if(isset($_POST['create'])){
		
		$firstname	= $_POST['firstname'];
		$lastname	= $_POST['lastname'];
		$username	= $_POST['username'];
		$email		= $_POST['email'];
		$contact	= $_POST['contact'];
		// $password	 = md5($_POST['password']);
		$password	= $_POST['password'];

		if(preg_match('/^([a-zA-Z])*$/',$firstname)){
			$return = true;
		}
		else{
			echo "<script>
				Swal.fire({
					title: 'Name should contain alphabets only!',
					text: 'Please enter a valid name.',
					icon: 'error'
				})
			</script>";
			$return = false;
		}
		if(preg_match('/^([a-zA-Z])*$/', $lastname)){
			$return = true;
		}
		else{
			echo "<script>
				Swal.fire({
					title: 'Name should contain alphabets only!',
					text: 'Please enter a valid name.',
					icon: 'error'
				})
			</script>";
			$return = false;
		}
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$return = true;
		}
		else{
			echo "<script>
				Swal.fire({
					title: 'Invalid email address',
					text: 'Please enter a valid email address!',
					icon: 'error'
				})
			</script>";
			$return = false;
			/*header("location: registration.php?error=invalidcontact");
			exit();*/
		}
		if(preg_match('/^([6-9]\d{9})$/', $contact)){
			$return = true;
		}
		else{
			echo "<script>
				Swal.fire({
					title: 'Invalid mobile number',
					text: 'Please enter a valid mobile number!',
					icon: 'error'
				})
			</script>";
			$return = false;
			/*header("location: registration.php?error=invalidcontact");
			exit();*/
		}



		if($return){

			$query = $db->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
 			$query->execute([$email,$username]);
 			$user = $query->fetchAll(PDO::FETCH_ASSOC);
 			if (empty($user)) {

				$sql = "INSERT INTO users(firstname, lastname, username, email, contact, password) VALUES (?,?,?,?,?,?);";
				$stmtinsert = $db->prepare($sql);
				$result = $stmtinsert->execute([$firstname, $lastname, $username, $email, $contact, $password]);
				if($result){
					if ($stmtinsert->rowCount()>0) {
							echo "<script>
								Swal.fire({
									title: 'User Registration Successful',
									text: 'You are succesfully registered',
									icon: 'success'
								})
								var r = 'login.php';
								setTimeout('window.location.href = r',2000);
							</script>";
							
					}
					
				}

			}
			else{
				echo "<script>
								Swal.fire({
									title: 'User Registration Failed',
									text: 'Email Address or Username already exists!',
									icon: 'error'
								})
							</script>";
			}


		}
	}
?>