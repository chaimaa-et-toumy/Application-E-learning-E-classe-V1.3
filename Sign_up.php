<?php
 include 'page/connection.php';
   
    if(isset($_POST['SIGN_UP'])){
        $Email = $_POST['Email'];
        $password = $_POST['password'];
        $full_name = $_POST['full_name'];
        $password_check = $_POST['password_check'];
        //  if(empty($Email) || empty($password) || empty($full_name) || empty($password_check)){
        //      header("Location: Sign_up.php?error= fields are required");

        // }
        if(empty($Email)){
            header("Location: Sign_up.php?error= Email is required");
        }
        elseif (empty($password)){
            header("Location: Sign_up.php?error= password is required");
        }
        elseif (empty($full_name)){
            header("Location: Sign_up.php?error= Full name  is required");
        }
        elseif (empty($password_check)){
            header("Location: Sign_up.php?error= confirm password  is required");
        }
        elseif (!(filter_var($Email, FILTER_VALIDATE_EMAIL))) {
            header("Location: Sign_up.php?error= Invalid Format Email");
        }
        else{
        $q = "insert into comptes (Email , password , Full_name , password_check) values ( '" . $Email . "' , '" . $password . "' , '" . $full_name . "' , '" . $password_check . "') ";
        $stmt = $conn -> prepare($q);
        $stmt -> execute();
        header('location: index.php');
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
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

</head>

<body class="bg-body">
    <main class="container-fluid">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <form method="POST" class="card form-class p-4">
                <h1 class="fw-bold border-start border-5 ps-2 h2"
                    style="border-left-color: #00c1fe !important;">E-classe
                </h1>

                <div class="text-center">
                    <p class="text-uppercase h4">Sign Up</p>
                    <p class="text-muted"> Entrer your credentials to access your account</p>
                </div>

               
                <?php if(isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
                <?php } ?>


                <div class="mb-2">
                    <label>Email</label>
                    <input type="email" class="form-control mt-2 " placeholder="Enter your email" name="Email">
                    <!-- <i class="fas fa-check-circle"></i>  -->
                    <!-- <i class="fas fa-exclamation-circle"></i>  -->
                    <!-- <small>Invalid Email </small> -->

                </div>

                <div class="mb-2">
                    <label>Password</label>
                    <input type="password" class="form-control mt-2" placeholder="Enter your password" name="password">
                    <!-- <i class="fas fa-check-circle"></i>  -->
                    <!-- <i class="fas fa-exclamation-circle"></i>  -->
                     <!-- <small>Invalid password </small> -->
                </div>

                <div class="mb-2">
                    <label>Full name</label>
                    <input type="text" class="form-control mt-2" placeholder="Enter your full name" name="full_name" > 
                    <!-- <i class="fas fa-check-circle"></i> 
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Invalid Name</small> -->
                </div> 

                <div class="mb-2">
                    <label> Password Check</label>
                    <input type="password" class="form-control mt-2" placeholder="check your password" name="password_check" >
                    <!-- <i class="fas fa-check-circle"></i> -->
                    <!-- <i class="fas fa-exclamation-circle"></i>  -->
                     <!-- <small>Invalid password </small> -->
                </div>

               
                <div class="mt-2">
                    <input type="submit" value="SIGN UP"  name="SIGN_UP" class="btn bg-info w-100 text-white">
                </div>
            </form>
        </div>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>