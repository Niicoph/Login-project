<?php
session_start();
include("conection.php");

if ($_POST) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "<script>alert('please, complete form.')</script>";
    } else {
        $log_email = $_POST['email'];
        $log_password = $_POST['password'];

        $conection = new conection();

        $stmt = $conection->prepare("SELECT email, password FROM `datosUsuarios` WHERE email = :email");
        $stmt->bindParam(":email", $log_email, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            if (password_verify($log_password, $result['password'])) {
				$_SESSION['username'] = $log_email ;
                header("location:main.php");
            } else {
                echo "<script>alert('Password incorrect')</script>";
            }
        } else {
            echo "<script>alert('Email incorrect.')</script>";
        }
        $stmt = null;
        $conection = null;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100 l-top">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>
								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">Password is required</div>
								</div>
								<div class="d-flex align-items-center">
									<button type="submit" class="btn btn-primary">Login</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">Don't have an account? 
                            <a href="register.php" class="text-dark">Create One</a>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="js/login.js"></script>
</body>
</html>




