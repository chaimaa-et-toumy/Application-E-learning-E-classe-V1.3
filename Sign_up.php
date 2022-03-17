<?php
include 'page/connection.php';

if (
	isset($_POST['Email']) &&
	isset($_POST['password']) &&
	isset($_POST['full_name']) &&
	isset($_POST['password_check'])
) {

	$Email = $_POST['Email'];
	$password = $_POST['password'];
	$full_name = $_POST['full_name'];
	$password_check = $_POST['password_check'];

	if ($Email !== '' && $password !== '' && $full_name !== '' && $password_check !== '') {

		$stmt =  $conn->prepare("SELECT * FROM comptes WHERE Email='$Email' ");
		$stmt->execute();
		$user = $stmt->fetch();

		if ($user) {
			$user_Email = $user['Email'];

			if ($Email === $user_Email) {
				header("Location: Sign_up.php?error= Email is already exist");
			}
		} elseif ($password === $password_check) {
			$q = "insert into comptes (Email , password , Full_name , password_check) values ( '" . $Email . "' , '" . $password . "' , '" . $full_name . "' , '" . $password_check . "') ";
			$stmt = $conn->prepare($q);
			$stmt->execute();
			$user = $stmt->fetch();
			header('location: index.php');
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-Classe Sign Up</title>
	<meta name="keywords" content="YouCode,Youssoufia,E-Classe">
	<meta name="description" content="application web pour les étudiants de YouCode">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-body">
	<main class="container-fluid">
		<div class="d-flex align-items-center justify-content-center vh-100">
			<form class="card form-class p-4" id="form" method="POST">
				<h1 class=" fw-bold border-start border-5 ps-2 h2" style="border-left-color: #00c1fe !important;">
					E-classe
				</h1>

				<div class="d-flex justify-content-center">
					<a href="index.php"><i class="fas fa-backward pe-5 fs-5"></i></a>
					<p class="text-uppercase h4 text-center pe-5">Sign Up</p>
				</div>
				<div class="text-center">
					<p class="text-muted"> Entrer your credentials to access your account</p>
				</div>
				<?php if (isset($_GET['error'])) { ?>
					<div class="alert alert-danger" role="alert">
						<?php echo $_GET['error']; ?>
					</div>
				<?php } ?>


				<div class="mb-1 group-div">
					<label for="username">Full name</label>
					<input type="text" class="form-control mt-2" placeholder="Enter your full name" id="username" name="full_name">
					<div class="error"></div>
				</div>

				<div class="mb-1 group-div">
					<label for="email">Email</label>
					<input type="text" class="form-control mt-2 label" placeholder="Enter your email" id="email" name="Email">
					<div class="error"></div>

				</div>

				<div class="mb-1 group-div">
					<label for="password">Password</label>
					<input type="password" class="form-control mt-2" placeholder="Enter your password" id="password" name="password">
					<div class="error"></div>
				</div>

				<div class="mb-1 group-div">
					<label for="password2"> Password Check</label>
					<input type="password" class="form-control mt-2" placeholder="check your password" id="password2" name="password_check">
					<div class="error"></div>
				</div>


				<div class="mt-2">
					<input type="button" value="SIGN UP" name="SIGN_UP" id="sign_up" class="btn bg-info w-100 text-white">
				</div>
			</form>
		</div>
	</main>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>