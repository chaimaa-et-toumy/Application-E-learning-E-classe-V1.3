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

    $q = "delete from student_list where Enroll_Number=?";

    $stmt = $conn->prepare($q);

    $stmt->execute([$Enroll_Number]);

    header ('Location: ../student.php');
}