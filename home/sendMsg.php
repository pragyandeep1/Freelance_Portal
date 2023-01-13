<?php 
	
	include_once "config.php";

	if (isset($_POST['send'])) {
		$name = $_POST['name'];
		$msg = $_POST['msg'];
		$cr_date = date('y-m-d h:i:s');

		$sql = "INSERT INTO message (name, msg, cr_date) VALUES (?,?,?) LIMIT 1";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name,$msg,$cr_date]);

		if ($result) {
			echo "<script>alert('Message sent successfully!');</script>";
		}
		else{
			echo $db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			exit;
		}
	}

 ?>
<?php include "views/header1.php"; ?>

    <title>Send Message</title>
  </head>
  <body>
  	<div class="container" id="center">
  		<div class="row">
  			<div class="col-sm-4"></div>
  			<div class="col-sm-4">
  				<form action="" method="POST" enctype="multipart/form-data">
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Name</label>
				    <input type="text" class="form-control text-uppercase" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name" required>
				    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
				  </div>
				  <div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Enter message</label>
					  <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div>
				  <button type="submit" name="send" class="btn btn-primary">Submit</button>
				</form>
				<a href="profile.php">Already sent message. View Message?</a>
  			</div>
  		</div>
  	</div>
<?php include "views/footer.php"; ?>