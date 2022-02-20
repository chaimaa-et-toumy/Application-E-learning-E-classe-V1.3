<?php
 include 'connection.php';
if(isset($_POST['create'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Enroll_Number = $_POST['Enroll_Number'];
    $Date_of_admission = $_POST['Date_of_admission'];
    $q = "insert into student_list (Name,Email,Phone,Enroll_Number,Date_of_admission) values ( '" . $Name . "' , '" . $Email . "' ,  $Phone ,  $Enroll_Number  ,'" . $Date_of_admission . "' )";
    $stmt = $conn -> prepare($q);
    $stmt -> execute();
    header('location: ../student.php');

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Classe | Creat Student</title>
    <meta name="keywords" content="YouCode,Youssoufia,E-Classe">
    <meta name="description" content="application web pour les étudiants de YouCode">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body class="bg-body">
    <main class="container-fluid creat_student">
        <div class="d-flex align-items-center justify-content-center vh-100">
        <form class="form-classe card p-4" method="POST" action="#">
            <div class="d-flex justify-content-center">
            <a href="../student.php"><i class="fas fa-backward pe-5"></i></a>
            <p class="text-uppercase h4 text-center fw-bold"> Creat student </p>
            </div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="Name"  placeholder="Entre your name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="Email" placeholder="Entre your email"  required>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="number" class="form-control" name="Phone" placeholder="Entre your phone"  required>
            </div>
            <div class="mb-3">
                <label class="form-label">Enroll Number</label>
                <input type="number" class="form-control" name="Enroll_Number" placeholder="Entre your enroll number"  required>
            </div>
            <div class="mb-3">
                <label class="form-label">Date of admission</label>
                <input type="date" class="form-control" name="Date_of_admission"  placeholder="Entre Date of admission" required>
            </div>

            <button type="submit" class="btn btn-primary w-100" name="create">create</button>
        </form>
        </div>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>