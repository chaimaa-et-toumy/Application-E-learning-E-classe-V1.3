<?php include 'page/connection.php';

session_start();
if(isset($_SESSION['user_Email'] )){
    



  $students=$conn->query('SELECT COUNT(*) as numberS  FROM student_list');
  $students->execute();
  $nStudents= $students->fetch(PDO::FETCH_ASSOC);

  $courses=$conn->query('SELECT COUNT(*) as numberC  FROM courses');
  $courses->execute();
  $nCourses= $courses->fetch(PDO::FETCH_ASSOC);

  $payment=$conn->query('SELECT SUM(Amount_Paid) as totalP FROM payment_details');
  $payment->execute();
  $tpayment= $payment->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Classe Dashboard</title>
    <meta name="keywords" content="YouCode,Youssoufia,E-Classe">
    <meta name="description" content="application web pour les étudiants de YouCode">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <main>
        <div class="container-fluid">

            <!-- sidebar menu -->
            <?php include ("page/sidebar.php"); ?>
            <!-- End Sidebar -->
 
            <!-- Navbar -->
            <?php include ("page/header.php"); ?>
            <!-- ENd navbar -->

            <!-- Contains page content -->
            <div class="content-wrapper pt-3 justify-content-around row me-0">
            

                <div class="col-md-3 col-sm-6 px-2 my-2">
                    <div style="background-color: #F0F9FF;" class="rounded p-3 div-card">
                        <div class="mb-4">
                                <svg width="48" height="30" viewBox="0 0 48 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M45.912 7.42895L26.037 1.06989C24.7013 0.643127 23.2995 0.643127 21.9638 1.06989L2.08875 7.42895C0.8205 7.83492 0 8.94227 0 10.25C0 11.5577 0.8205 12.6651 2.088 13.0711L4.31625 13.7836C4.06875 14.2422 3.88575 14.7358 3.7665 15.2531C2.96475 15.6375 2.4 16.4339 2.4 17.375C2.4 18.3198 2.96775 19.1206 3.77475 19.5029L2.421 27.805C2.30025 28.5464 2.71425 29.25 3.2715 29.25H6.32775C6.885 29.25 7.29975 28.5464 7.17825 27.805L5.82525 19.5029C6.63225 19.1206 7.2 18.3198 7.2 17.375C7.2 16.5883 6.78825 15.9248 6.19275 15.4921C6.3045 15.1462 6.47775 14.8345 6.6855 14.5413L10.6958 15.8246L9.6 24.5C9.6 27.1236 16.047 29.25 24 29.25C31.953 29.25 38.4 27.1236 38.4 24.5L37.3043 15.8246L45.912 13.0703C47.1795 12.6651 48 11.5577 48 10.25C48 8.94227 47.1795 7.83492 45.912 7.42895ZM35.961 24.3412C35.154 25.1821 31.053 26.875 24 26.875C16.947 26.875 12.846 25.1821 12.039 24.3412L13.0208 16.5682L21.9638 19.4294C22.1588 19.4917 23.8928 20.1144 26.037 19.4294L34.98 16.5682L35.961 24.3412ZM45.171 10.8126L25.296 17.1716C24.4478 17.4433 23.5523 17.4433 22.704 17.1716L9.52875 12.956L24.2205 10.2292C24.8723 10.109 25.3013 9.48852 25.179 8.84356C25.0575 8.19785 24.417 7.77555 23.7795 7.89578L8.496 10.7309C7.566 10.9031 6.73275 11.2987 6.015 11.8316L2.82825 10.8118C2.2395 10.6226 2.26875 9.86629 2.82825 9.68742L22.7033 3.32836C23.8358 2.96617 24.7913 3.16731 25.2952 3.32836L45.1703 9.68742C45.7245 9.86481 45.7635 10.6226 45.171 10.8126Z"
                                        fill="#74C1ED" />
                                </svg>
                                <p class="text-secondary h4 mt-4">
                                    Students
                                </p>
                                <p class="fw-bold h3 float-end mt-3">
                                    <?php echo $nStudents['numberS']?>
                                </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 px-2  my-2">
                    <div style="background-color: #FEF6FB;" class="rounded p-3 div-card">
                        <div class="mb-4">
                                <svg width="28" height="35" viewBox="0 0 28 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.5 0H24.5C26.433 0 28 1.46904 28 3.28125V35L14 27.3438L0 35V3.28125C0 1.46904 1.56698 0 3.5 0ZM2.33333 31.1915L14 24.8113L25.6667 31.1915V3.28125C25.6667 2.67818 25.1433 2.1875 24.5 2.1875H3.5C2.85673 2.1875 2.33333 2.67818 2.33333 3.28125V31.1915Z"
                                        fill="#EE95C5" />
                                </svg>
                                <p class="text-secondary h4 mt-4">
                                    Cours
                                </p>
                                <p class="fw-bold h3 float-end mt-3">
                                     <?php echo $nCourses['numberC']?>
                                </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 px-2  my-2">
                    <div style="background-color: #FEFBEC;" class="rounded p-3 div-card">
                        <div class="mb-4">
                                <svg width="35" height="36" viewBox="0 0 35 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.6484 17.5859L15.0234 16.0078C14.0781 15.7422 13.4141 14.8828 13.4141 13.9219C13.4141 12.7266 14.4141 11.75 15.6406 11.75H19.1562C20.0312 11.75 20.8672 12.0312 21.5469 12.5391C21.7969 12.7266 22.1406 12.6953 22.3594 12.4766L23.2422 11.5781C23.5078 11.3125 23.4766 10.875 23.1797 10.6406C22.0391 9.73438 20.6328 9.24219 19.1484 9.24219H18.75V6.11719C18.75 5.77344 18.4688 5.49219 18.125 5.49219H16.875C16.5312 5.49219 16.25 5.77344 16.25 6.11719V9.24219H15.6406C13.0391 9.24219 10.9141 11.3359 10.9141 13.9141C10.9141 15.9922 12.3281 17.8359 14.3438 18.4062L19.9688 19.9844C20.9141 20.25 21.5781 21.1094 21.5781 22.0703C21.5781 23.2656 20.5781 24.2422 19.3516 24.2422H15.8359C14.9609 24.2422 14.125 23.9609 13.4453 23.4531C13.1953 23.2656 12.8516 23.2969 12.6328 23.5156L11.75 24.4141C11.4844 24.6797 11.5156 25.1172 11.8125 25.3516C12.9531 26.2578 14.3594 26.75 15.8438 26.75H16.25V29.875C16.25 30.2188 16.5312 30.5 16.875 30.5H18.125C18.4688 30.5 18.75 30.2188 18.75 29.875V26.75H19.3594C21.9609 26.75 24.0859 24.6562 24.0859 22.0781C24.0781 20 22.6719 18.1562 20.6484 17.5859ZM31.25 0.5H3.75C1.67969 0.5 0 2.17969 0 4.25V31.75C0 33.8203 1.67969 35.5 3.75 35.5H31.25C33.3203 35.5 35 33.8203 35 31.75V4.25C35 2.17969 33.3203 0.5 31.25 0.5ZM32.5 31.75C32.5 32.4375 31.9375 33 31.25 33H3.75C3.0625 33 2.5 32.4375 2.5 31.75V4.25C2.5 3.5625 3.0625 3 3.75 3H31.25C31.9375 3 32.5 3.5625 32.5 4.25V31.75Z"
                                        fill="#00C1FE" />
                                </svg>
                                <p class="text-secondary mt-4 h4">
                                    Payments
                                </p>
                                <p class="fw-bold h3 text-truncate float-end mt-3">
                                      <?php echo $tpayment['totalP']?> 
                                      <small class="fw-bold">DHS</small>

                                </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 px-2 my-2">
                    <div style="background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);"
                        class="rounded p-3 div-card">
                        <div class="mb-4">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 2.125C21.1039 2.125 24.4375 5.45859 24.4375 9.5625C24.4375 13.6664 21.1039 17 17 17C12.8961 17 9.5625 13.6664 9.5625 9.5625C9.5625 5.45859 12.8961 2.125 17 2.125ZM25.5 23.375C29.0129 23.375 31.875 26.2371 31.875 29.75V31.875H2.125V29.75C2.125 26.2371 4.98711 23.375 8.5 23.375C14.1445 23.375 12.9691 24.4375 17 24.4375C21.0441 24.4375 19.8488 23.375 25.5 23.375ZM17 0C11.7207 0 7.4375 4.2832 7.4375 9.5625C7.4375 14.8418 11.7207 19.125 17 19.125C22.2793 19.125 26.5625 14.8418 26.5625 9.5625C26.5625 4.2832 22.2793 0 17 0ZM25.5 21.25C19.3641 21.25 20.7852 22.3125 17 22.3125C13.2281 22.3125 14.6293 21.25 8.5 21.25C3.80508 21.25 0 25.0551 0 29.75V31.875C0 33.0504 0.949609 34 2.125 34H31.875C33.0504 34 34 33.0504 34 31.875V29.75C34 25.0551 30.1949 21.25 25.5 21.25Z"
                                        fill="white" />
                                </svg>
                                <p class="text-white h4 mt-4">
                                    Users
                                </p>

                                <p class="fw-bold h3 float-end mt-3">
                                   12
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('page/footer.php'); ?>
    <?php } 
    else{
        header("Location:index.php");
    }
    ?>