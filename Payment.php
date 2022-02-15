<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Classe Payment</title>
    <meta name="keywords" content="YouCode,Youssoufia,E-Classe">
    <meta name="description" content="application web pour les étudiants de YouCode">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class=" bg-content">
    <main>
        <div class="wrapper container-fluid">
            <!-- sidebar menu -->
            <?php include ("page/sidebar.php"); ?>
            <!-- Main Sidebar Container -->

            <!-- Navbar -->
            <?php include ("page/header.php"); ?>
            <!-- /.navbar -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="px-2">
                    <div class="d-flex justify-content-between pt-3 px-3">
                        <h1 class="text-capitalize h3 fw-bold">
                            payments details
                        </h1>
                        <div>
                            <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.6 11.375H1.39998C0.157481 11.375 -0.472519 12.8574 0.411231 13.7211L6.01123 19.2211C6.55811 19.7582 7.44623 19.7582 7.99311 19.2211L13.5931 13.7211C14.4681 12.8574 13.8425 11.375 12.6 11.375ZM6.99998 18.25L1.39998 12.75H12.6L6.99998 18.25ZM1.39998 8.625H12.6C13.8425 8.625 14.4725 7.14257 13.5887 6.2789L7.98873 0.7789C7.44186 0.241791 6.55373 0.241791 6.00686 0.7789L0.406856 6.2789C-0.468144 7.14257 0.157481 8.625 1.39998 8.625ZM6.99998 1.74999L12.6 7.24999H1.39998L6.99998 1.74999Z"
                                    fill="#00C1FE" />
                            </svg>
                        </div>

                    </div>
                    <!-- table payment -->
                    <?php include ("page/payment-table.php");?>
                    <!-- / .table payment -->
                </div>
            </div>
        </div>
            <!-- /.content-wrapper -->
    </main>
    <?php include('page/footer.php'); ?>