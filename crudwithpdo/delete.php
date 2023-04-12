<?php

    try{

        $pdo = new PDO("mysql:dbname=school;host=localhost",'root','12345');

        $statement = $pdo->query(
        "
            DELETE FROM students WHERE id=7
        ");

        if($statement){
            echo 'Deleted Successfully';
        }


    }catch(PDOException $err) {
        die($err->getMessage());
    }catch(Exception $e) {
        die($e->getMessage());
    }



?>