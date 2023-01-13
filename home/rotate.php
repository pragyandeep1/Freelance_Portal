<?php 
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$angle = $_POST['angle'];
		$filename = "image2.jpg";

		// $exif = exif_read_data($filename);
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";
		die;*/

		// check orientation
		if (isset($exif['Orientation'])) {
			$a = $exif['Orientation'];

			// determine image orientation
			if ($a == 3) {
				$angle = 180; //180 degree rotate left
			}
			elseif ($a == 5) {
				$angle = -90; //flip vertical and 90 degree rotate right
			}
			elseif ($a == 6) {
				$angle = -90; // 90 degree rotate right
			}
			elseif ($a == 7) {
				$angle = -90; //flip horizontal and 90 degree rotate right
			}
			elseif ($a == 8) {
				$angle = 90; // 90 degree rotate left
			}
		}

		if (is_numeric($angle)) {
			if (file_exists($filename)) {
				$image = imagecreatefromjpg($filename);
				$color = imagecolorallocate($image, 250, 50, 100);
				$rotated = imagerotate($image, $angle, $color);
				imagejpg($rotated, "image_rotated.jpg", 90);
				imagedestroy($image);
				imagedestroy($rotated);
			}
		}
	}
?>

<img src="../img/avatars/image.jpg" style="max-width: 32rem; margin: 0.7rem;">
<img src="../img/avatars/image_rotated.jpg" style="max-width: 32rem; margin: 0.7rem;">

<br><br>

<form action="" method="post" enctype="multipart/form-data">
	<input type="submit" name="submit" value="rotate">
	<input type="text" name="angle" value="0">
</form>