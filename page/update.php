<?php

include 'connection.php';


if (!$_GET['Enroll_Number'])
{

    ?>
        <p>Not Found<p>
    <?php

}

else
{

    $Enroll_Number=$_GET['Enroll_Number'];


    if (isset($_POST['update']))
    {

        $Enroll_Number=$_GET['Enroll_Number'];

        $q = "update student_list
                set Name=?, Email=?, Phone=?, Date_of_admission=?
                where Enroll_Number=?";

        $stmt = $conn->prepare($q);

        $stmt->execute([$_POST['Name'], $_POST['Email'], $_POST['Phone'], $_POST['Date_of_admission'], $Enroll_Number]);
        header ('Location: ../student.php');


    }


    $q = "select * from student_list where Enroll_Number=?";

    $stmt = $conn->prepare($q);

    $stmt->execute([$Enroll_Number]);

    $ligne = $stmt->fetch();

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
            <p class="text-uppercase h4 text-center fw-bold"> Update student </p>
            </div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="Name"  placeholder="Entre your name" required value="<?php echo $ligne['Name']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="Email" placeholder="Entre your email"  required value="<?php echo $ligne['Email']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="number" class="form-control" name="Phone" placeholder="Entre your phone"  required value="<?php echo $ligne['Phone']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Enroll Number</label>
                <input type="number" class="form-control" name="Enroll_Number" placeholder="Entre your enroll number"  disabled value="<?php echo $ligne['Enroll_Number']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Date of admission</label>
                <input type="date" class="form-control" name="Date_of_admission"  placeholder="Entre Date of admission" required value="<?php echo $ligne['Date_of_admission']; ?>">
            </div>

            <button type="submit" class="btn btn-primary w-100" name="update">Update</button>
        </form>
        </div>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>