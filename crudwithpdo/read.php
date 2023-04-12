<?php

    try{    
        $pdo = new PDO('mysql:dbname=school;host=localhost','root','12345');
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // fetch all data lists
        $allStudents = $pdo->query('SELECT * FROM studentss');

        var_dump($allStudents);

        //with array
        // foreach($allStudents as $student) {
        //     var_dump($student);
        // }

        echo 'hello world';

        echo "<hr/><br/><hr/>";


        // specific data
        $statement = $pdo->query('SELECT * FROM students WHERE id=2');
        //just result
        $studentList = $statement->fetch(PDO::FETCH_OBJ);

        var_dump($studentList);
        
    }catch(PDOException $err){
        var_dump($err->getMessage());
    }

?>
