<?php

    try{    
        $pdo = new PDO('mysql:dbname=school;host=localhost','root','12345');
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // fetch all data lists
        $statement = $pdo->query("SELECT * FROM students");

        if($statement){
            $students = $statement->fetchAll(PDO::FETCH_OBJ);
        }

        // foreach($students as $student) {
        //     echo $student->name . " is " . $student->gender . " - " . $student->dob . " birthday date . <br/>" ;
        // }

        
    }catch(PDOException $err){
        var_dump($err);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Read Page</title>
</head>
<body>


    <div class="container mt-3">
        <div class="row">
            <div class="col-6 mx-auto">
                <table class="table border text-center table-hover">
                    <thead class="bg-info">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>DOB</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($students as $student) : ?>
                            <tr>
                                <td> <?php echo $student->id ?> </td>
                                <td> <?php echo $student->name ?> </td>
                                <td> <?php echo $student->dob ?> </td>
                                <td> <?php echo $student->gender ?> </td>
                            </tr>
                        <?php endforeach ;  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

 
        

</body>
</html>
