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
$sql = $conn->query('SELECT * FROM payment_details');
?>
<body>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead style="border-top: 1px solid #E5E5E5">
                <tr class="text-center">
                    <th class="text-secondary">Name</th>
                    <th class="text-secondary text-nowrap">Payment Schedule</th>
                    <th class="text-secondary text-nowrap">Bill Number</th>
                    <th class="text-secondary text-nowrap">Amount Paid</th>
                    <th class="text-secondary text-nowrap">Balance amount</th>
                    <th class="text-secondary ">Date</th>
                </tr>
            </thead>
            <tbody class="border-top-0">
                <?php 
        while($ligne = $sql->fetch(PDO::FETCH_ASSOC)){
            echo '<tr>';

             echo'<td class="text-center">';
                echo $ligne['Name'];
             echo'</td>';
            
             echo'<td class="text-center">';
                 echo $ligne['Payment_Schedule'];
             echo'</td>';

             echo'<td class="text-center">';
                echo $ligne['Bill_Number'];
             echo'</td>';

             echo'<td class="text-center">';
                 echo $ligne['Amount_Paid'];
             echo'</td>';

             echo'<td class="text-center">';
                echo $ligne['Balance_amount'];
             echo'</td>';

             echo'<td class="text-center">';
                 echo $ligne['Date'];
             echo'</td>';

             echo '<td>';
                echo'<i class="fas fa-eye text-info"></i>';
             echo '</td>';

            echo '</tr>';

        }
        ?>
            </tbody>
        </table>
    </div>
</body>

</html>