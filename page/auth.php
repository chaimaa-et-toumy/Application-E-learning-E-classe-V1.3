<?php
include 'connection.php';
session_start();

if(isset($_POST['Email']) && isset($_POST['password']) ){
    $Email = $_POST['Email'];
    $password = $_POST['password'];
    if(empty($Email)){
        header("Location:../index.php?error= Email is required");
    }
    elseif (empty($password)){
        header("Location:../index.php?error= password is required");
    }
    else{
       
        $stmt =  $conn -> prepare("SELECT * FROM comptes WHERE Email='$Email' AND password='$password' ");
        $stmt->execute();
            $user = $stmt->fetch();
            $user_Email = $user['Email'];
            $user_password = $user['password'];
            $user_full_name = $user['Full_name'];
        
            if (!(filter_var($Email, FILTER_VALIDATE_EMAIL))) {
                header("Location:../index.php?error= Invalid Format Email");
            }
            
            else if($Email === $user_Email && $password === $user_password){
                    $_SESSION['user_Email'] = $user_Email;
                    $_SESSION['user_password '] = $user_password ;
                    $_SESSION['user_full_name'] = $user_full_name;
                    header("Location:../dashboard.php");
                

            }else {
            header("Location:../index.php?error= Incorrect email or password ");
        }
       
    }
}
?>