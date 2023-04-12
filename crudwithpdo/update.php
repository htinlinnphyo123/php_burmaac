<?php

    try{

        $pdo = new PDO("mysql:dbname=school;host=localhost",'root','12345');

        $statement = $pdo->query(
        "
            UPDATE students
            SET name = 'Hla Hla',gender='female' WHERE name='H4P6';
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