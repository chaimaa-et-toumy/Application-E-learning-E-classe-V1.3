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
<?php
include 'connection.php';
$sql = $conn->query('SELECT * FROM student_list');
?>
<body>
<div class="table-responsive">
        <table class="table mt-2 table-hover overflow-sm-auto">
                <thead style="border-top: 1px solid #E5E5E5">
                        <tr style="color: #ACACAC;" class="fw-bold text-center">
                                <th style="visibility:hidden">pour accessiblite</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th class="text-nowrap">Enroll Number</th>
                                <th class="text-nowrap">Date of admission</th>
                                <th style="display: none;">pour accissibilite</th>
                                <th style="display: none;">pour accissibilite</th>
                        </tr>
                </thead>

                <tbody class="border-top-0">

        <?php  while($ligne = $sql->fetch(PDO::FETCH_ASSOC)){ ?>
            <tr>

            <td class="align-middle text-center"> <img src="img/profile.png"> </td>

            <td class="align-middle text-center" > <?php echo $ligne['Name']; ?> </td>
            
            <td class="align-middle text-center" > <?php echo $ligne['Email'];  ?> </td>

             <td class="align-middle text-center" > <?php echo $ligne['Phone']; ?></td>

             <td class="align-middle text-center" >  <?php  echo $ligne['Enroll_Number']; ?> </td>

             <td class="align-middle text-center" > <?php  echo $ligne['Date_of_admission'] ?> </td>

             <td class="align-middle text-center"> <a href="page/update.php?Enroll_Number=<?php echo $ligne['Enroll_Number']; ?>"> <i class="fa fa-pen text-info"></i> </a> </td>

             <td class="align-middle text-center"> <a href="page/delete_student.php?Enroll_Number=<?php echo $ligne['Enroll_Number']; ?>"> <i class="fa fa-trash text-info"></i> </a> </td>

            </tr>

       <?php } ?>
        </tbody>
</table>
</div>
</body>

</html>