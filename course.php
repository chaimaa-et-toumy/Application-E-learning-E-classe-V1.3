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
                            Course
                        </h1>

                    </div>
                    <?php include ('page/course-table.php'); ?>

                </div>
            </div>
        </div>
    </main>

    <!-- ./wrapper -->

    <?php include('page/footer.php'); ?>