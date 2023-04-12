<?php

    try{

        $pdo = new PDO("mysql:dbname=school;host=localhost",'root','12345');

        $statement = $pdo->query(
        "
            INSERT INTO students(name,dob,gender)
            VALUES ('H4P6','2002-02-03','male');
        ");

        if($statement){
            var_dump($statement);
        }

    }catch(PDOException $err) {
        die($err->getMessage());
    }catch(Exception $e) {
        die($e->getMessage());
    }



?>