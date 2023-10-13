<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100 r-top">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5"></div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5 asd d-flex flex-column align-items-center">
                            <h1 class="fs-5 card-title fw-bold mb-4 h1">Welcome! thank you for login</h1>
                             <a href="logout.php">  <button class="btn btn-primary">Log out</button>   </a> 
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Remember to always drink water!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>





</html>

