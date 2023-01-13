<?php

	require 'views/header.php';
	require 'config.php';
	error_reporting(0);
	// require 'sendemail.php';

if(isset($_POST['submit'])){
	// extract values from $_post array
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$speciality = $_POST['speciality'];
	$address = $_POST['address'];
	$postcode = $_POST['postcode'];
	$state = $_POST['state'];
	$city = $_POST['city'];	
	$orig_file = $_FILES['avatar']['tmp_name'];
	$ext = pathinfo($_FILES['avatar']['name'],PATHINFO_EXTENSION);
	$target_dir = 'uploads/';
	$destination = "$target_dir$contact.$ext";
	move_uploaded_file($orig_file, $destination);
	exit();


	// call function to insert and track if success or not
	$isSuccess = $crud->insertDetails($fname, $lname, $dob, $email, $contact, $speciality);
	$spcialityName = $crud->getSpecialityById($speciality);

	if (isSuccess) {
		SendEmail::SendMail($email, 'Welcome to IT Conference 2019', 'You have successfully registered for this year\'s IT Conference.');
		include('successmessage.php');
	}
	else{
		include('errormessage.php');
	}
}
?>
<img src="<?php echo $destination;?>" class="rounded-circle" style="width: 20%; height: 20%;">
<div class="card" style="width: 18rem;margin-top: 5rem; left: 2rem;">
	<div class="card-body">
		<h5 class="card-title">
			<?php echo $_POST['firstname'].''.$_POST['lastname'];?>
		</h5>
		<h6 class="card-subtitle mb-2 text-muted">
			<?php echo $speciality['name'];?>
		</h6>
		<p class="card-text">
			Date of Birth: <?php echo $_POST['dob'];?>
		</p>
		<p class="card-text">
			Email Address: <?php echo $_POST['email'];?>
		</p>
		<p class="card-text">
			Contact Number: <?php echo $_POST['contact'];?>
		</p>
	</div>
</div>