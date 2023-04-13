<?php

    $pdo = new PDO('mysql:dbname=school;host=localhost','root','12345');

    $statement = $pdo->prepare("SELECT * FROM students WHERE id=:id");

    $statement->bindParam(':id',$_GET['id']);

    if($statement->execute()){
        $student = $statement->fetch(PDO::FETCH_OBJ);
    }
    var_dump($student);
    $student->dob = date_create($student->dob);
    $currentDate = date_create(date('Y-m-d'));

    // var_dump($student->dob);
    // var_dump($currentDate);

    $datediff = date_diff($student->dob,$currentDate);
    var_dump($datediff);
    var_dump(date_format($currentDate,'Y / F / d'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Single data fetch with pdo</title>
</head>
<body>
    
    <?php
        echo $student->name . " is " . $datediff->y . ' years ' . $datediff->m . ' months and ' . $datediff->d  . ' days old. ';
    ?>

</body>
</html>