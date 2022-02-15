<?php
 include 'page/connection.php'; 
// $hashed_password = password_hash('abcd',PASSWORD_DEFAULT);
// echo $hashed_password; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Classe Sign In</title>
    <meta name="keywords" content="YouCode,Youssoufia,E-Classe">
    <meta name="description" content="application web pour les étudiants de YouCode">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-body">
    <main class="container-fluid">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <form action="page/auth.php" method="POST" class="card form-class p-4">
                <h1 class="fw-bold border-start border-5 ps-2 h2"
                    style="border-left-color: #00c1fe !important;">E-classe
                </h1>

                <div class="text-center">
                    <p class="text-uppercase h4">sign in</p>
                    <p class="text-muted"> Entrer your credentials to access your account</p>
                </div>

                <?php if(isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
                <?php } ?>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control mt-2" placeholder="Enter your email" name="Email" >
                </div>

                <div class="mb-4">
                    <label>Password</label>
                    <input type="password" class="form-control mt-2" placeholder="Enter your password" name="password" >
                </div>
                <div class="mb-3">
                    <input type="submit" value="SIGN IN"  name="SIGN" class="btn bg-info w-100 text-white">
                </div>
                
                <div class="mb-2">
                    <input class="form-check-input" type="checkbox" name="remember">
                    <label class="form-check-label px-1">
                        Remember me 
                    </label>
                </div>

                <p class="text-muted text-center">forgot your password ? <a href="#" class="text-info">Reset
                        Password</a></p>
            </form>
        </div>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>