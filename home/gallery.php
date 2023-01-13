<?php include "views/header.php" ?>

<main>
	<section class="gallery-links">
		<div class="wrapper">
			<h3>Gallery</h3>
			<div class="gallery-container">
				<a href="#!">
					<div></div>
					<h4>This is a title</h4>
					<p>This is a paragraph</p>
				</a>
				<a href="#!">
					<div></div>
					<h4>This is a title</h4>
					<p>This is a paragraph</p>
				</a>
				<a href="#!">
					<div></div>
					<h4>This is a title</h4>
					<p>This is a paragraph</p>
				</a>
				<a href="#!">
					<div></div>
					<h4>This is a title</h4>
					<p>This is a paragraph</p>
				</a>
			</div>

			<div class="gallery">
	<div class="gcon">
		<h3>Uploaded files</h3>
		<?php
			// include database configuration file
			require_once "config.php";

			// get images from the database
			$sql = "SELECT * FROM job_posting ORDER BY uploaded_on DESC";
			$stmt = $db->prepare($sql);
			// $result = $stmt->execute([$title, $description, $filename, $type_work]);

			if ($sql->num_rows > 0) {
				while ($row = $sql->fetch_assoc()) {
					$imgURL = 'uploads/'.$row["file_name"];

			?>

			<img src="<?php echo $imgURL; ?>" alt="">
			<?php

				}
			}
			else{
				?>
				<p>No file(s) found.</p>

				<?php


			}
		?>
	</div>
</div>
		</div>
	</section>
</main>

<?php include "views/footer.php" ?>