<?php
session_start();

if (!isset($_SESSION['user'])) {
	header('location:login.php');
}

?>

<?php include("./views/header.php")?>

<div class="container center-div shadow">
	<div class="heading text-center text-uppercase text-white mb-5">
		Please visit here <?php echo $_SESSION['userlogin']?> again
	</div>
	<a href="logout.php" class="btn btn-danger">Log out</a>
</div>
<?php include("./views/footer.php")?>