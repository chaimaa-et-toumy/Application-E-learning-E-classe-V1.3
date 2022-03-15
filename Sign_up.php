<?php
 include 'page/connection.php'; 
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
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

</head>

<body class="bg-body">
    <main class="container-fluid">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <form method="GET" class="card form-class p-4">
                <h1 class="fw-bold border-start border-5 ps-2 h2"
                    style="border-left-color: #00c1fe !important;">E-classe
                </h1>

                <div class="text-center">
                    <p class="text-uppercase h4">Sign Up</p>
                    <p class="text-muted"> Entrer your credentials to access your account</p>
                </div>

                <div class="mb-2">
                    <label>Full name</label>
                    <input type="text" class="form-control mt-2 full_name" placeholder="Enter your Full name" name="full_name"> 
                    <!-- <i class="fas fa-check-circle"></i> 
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Invalid Name</small> -->
                </div>


                <div class="mb-2">
                    <label>Email</label>
                    <input type="email" class="form-control mt-2 Email" placeholder="Enter your email" name="Email">
                    <!-- <i class="fas fa-check-circle"></i>  -->
                    <!-- <i class="fas fa-exclamation-circle"></i>  -->
                    <!-- <small>Invalid Email </small> -->

                </div>

                <div class="mb-2">
                    <label>Password</label>
                    <input type="password" class="form-control mt-2 password" placeholder="Enter your password" name="password">
                    <!-- <i class="fas fa-check-circle"></i>  -->
                    <!-- <i class="fas fa-exclamation-circle"></i>  -->
                     <!-- <small>Invalid password </small> -->
                </div>

                <div class="mb-2">
                    <label> Password Check</label>
                    <input type="password" class="form-control mt-2 password_check" placeholder="check your password" name="password">
                    <!-- <i class="fas fa-check-circle"></i> -->
                    <!-- <i class="fas fa-exclamation-circle"></i>  -->
                     <!-- <small>Invalid password </small> -->
                </div>

                <div class="mt-2">
                    <input type="submit" value="SIGN UP"  name="SIGN-UP" class="btn bg-info w-100 text-white sign_up">
                </div>
            </form>
        </div>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>