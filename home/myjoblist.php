<?php

	session_start();
require_once "config.php";


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<table>
		<tr>
			<th>Job Title</th>
			<th>Job Description</th>
			<th>Posted on</th>
			<th>Documents</th>
		</tr>
		<?php
			$sql = "SELECT * FROM job_posting WHERE posted_by = ?;";
			$user = $_SESSION['userlogin']['email'];
			$stmt = $db->prepare($sql);
			$result = $stmt->execute([$user]);

	if ($result) {
		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach ($data as $jobs) {
		 ?>
		 	<tr>
		 		<td>
		 			<?php echo $jobs['title'];?>
		 		</td>
		 		<td>
		 			<?php echo $jobs['description'];?>
		 		</td>
		 		<td>
		 			<?php echo $jobs['uploaded_on'];?>
		 		</td>
		 		<td>
		 			<a download="<?php echo $jobs['file_name'];?>" href="<?php echo '../uploads/'.$jobs['file_name'];?>"><?php echo $jobs['file_name'];?></a>
		 		</td>
		 	</tr>
		<?php }} ?>
	</table>
</body>
</html>