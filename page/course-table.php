<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Classe course</title>
    <meta name="keywords" content="YouCode,Youssoufia,E-Classe">
    <meta name="description" content="application web pour les étudiants de YouCode">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<?php
include 'connection.php';
$sql = $conn->query('SELECT * FROM courses');
?>
<body>
<div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead style="border-top: 1px solid #E5E5E5">
                <tr class="text-center">
                    <th class="text-secondary">id</th>
                    <th class="text-secondary text-nowrap">prof</th>
                    <th class="text-secondary text-nowrap">type</th>
                    <th class="text-secondary text-nowrap">prix</th>
                    <th class="text-secondary text-nowrap">language</th>
                </tr>
            </thead>
            <tbody class="border-top-0">
                <?php 
        while($ligne = $sql->fetch(PDO::FETCH_ASSOC)){
            echo '<tr>';

             echo'<td class="text-center">';
                echo $ligne['id'];
             echo'</td>';
            
             echo'<td class="text-center">';
                 echo $ligne['prof'];
             echo'</td>';

             echo'<td class="text-center">';
                echo $ligne['type'];
             echo'</td>';

             echo'<td class="text-center">';
                 echo $ligne['prix'];
             echo'</td>';

             echo'<td class="text-center">';
                echo $ligne['language'];
             echo'</td>';
            echo '</tr>';

        }
        ?>
            </tbody>
        </table>
    </div>
</body>

</html>