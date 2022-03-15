<?php
session_start();
if(isset($_SESSION['user_Email'] )){
?>
<!-- Form model -->
<?php
include 'page/connection.php';
if(isset($_POST['create'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Enroll_Number = $_POST['Enroll_Number'];
    $Date_of_admission = $_POST['Date_of_admission'];
    if(empty($Name)){
        header("Location: student.php?error= Name is required");
    }
    elseif (empty($Email)){
        header("Location: student.php?error= Email is required");
    }
    elseif (empty($Phone)){
        header("Location: student.php?error= Phone is required");
    }
    elseif (empty($Enroll_Number)){
        header("Location: student.php?error= Enroll_Number is required");
    }
    elseif (empty($Date_of_admission)){
        header("Location: student.php?error= Date_of_admission is required");
    }
    elseif (!(filter_var($Email, FILTER_VALIDATE_EMAIL))) {
        header("Location: student.php?error= Invalid Format Email");
    }
    else{
    $q = "insert into student_list (Name,Email,Phone,Enroll_Number,Date_of_admission) values ( '" . $Name . "' , '" . $Email . "' ,  $Phone ,  $Enroll_Number  ,'" . $Date_of_admission . "' )";
    $stmt = $conn -> prepare($q);
    $stmt -> execute();
    header('location: student.php');
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Classe Student</title>
    <meta name="keywords" content="YouCode,Youssoufia,E-Classe">
    <meta name="description" content="application web pour les étudiants de YouCode">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-content">
    <main>
        <div class="container-fluid">

            <!-- sidebar menu -->
            <?php include ("page/sidebar.php"); ?>
            <!-- Main Sidebar Container -->

            <!-- Navbar -->
            <?php include ("page/header.php"); ?>
            <!-- /.navbar -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper pt-3">
                <div class="px-3">
                    <div class="d-flex justify-content-between">
                        <h1 class="text-capitalize h3 fw-bold">
                            students list
                        </h1>
                        <div>
                            <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.6 11.375H1.39998C0.157481 11.375 -0.472519 12.8574 0.411231 13.7211L6.01123 19.2211C6.55811 19.7582 7.44623 19.7582 7.99311 19.2211L13.5931 13.7211C14.4681 12.8574 13.8425 11.375 12.6 11.375ZM6.99998 18.25L1.39998 12.75H12.6L6.99998 18.25ZM1.39998 8.625H12.6C13.8425 8.625 14.4725 7.14257 13.5887 6.2789L7.98873 0.7789C7.44186 0.241791 6.55373 0.241791 6.00686 0.7789L0.406856 6.2789C-0.468144 7.14257 0.157481 8.625 1.39998 8.625ZM6.99998 1.74999L12.6 7.24999H1.39998L6.99998 1.74999Z"
                                    fill="#00C1FE" />
                            </svg>
                            <button class="btn text-uppercase text-white button-student" data-bs-toggle="modal" data-bs-target="#myModal">Add new
                                student</button>
                        </div>

                    </div>
                    <?php include ('page/student-table.php'); ?>

                </div>
            </div>
            <!-- *************************Create student use model bs ********************-->
            <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <!-- Modal body -->
                        <div class="modal-body">
                        <form class="p-4" method="POST" action="#">
                            <div class="d-flex justify-content-center">
                            <a href="student.php"><i class="fas fa-backward pe-5"></i></a>
                            <p class="text-uppercase h4 text-center fw-bold"> Creat student </p>
                            </div>
                            <?php if(isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_GET['error']; ?>
                            </div>
                            <?php } ?>
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="Name"  placeholder="Entre your name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="Email" placeholder="Entre your email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="number" class="form-control" name="Phone" placeholder="Entre your phone">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Enroll Number</label>
                                <input type="number" class="form-control" name="Enroll_Number" placeholder="Entre your enroll number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date of admission</label>
                                <input type="date" class="form-control" name="Date_of_admission"  placeholder="Entre Date of admission">
                            </div>

                            <button type="submit" class="btn btn-primary w-100" name="create">create</button>
                        </form>
                        </div>
                        </div>
                    </div>
            </div>

        </div>
    </main>

    <!-- ./wrapper -->

    <?php include('page/footer.php'); ?>
    <?php } 
    else{
        header("Location:index.php");
    }
    ?>