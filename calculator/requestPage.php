<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <form action="calculator.php" class="w-75 m-auto mt-3" method="POST">
        <div class="form-group my-2">
            <label for="firstNumber">First Number</label>
            <input type="text" name="first_number" class="form-control" placeholder="First Number">
        </div>
        <div class="form-group my-2">
            <label for="">Second Number</label>
            <input type="text" name="second_number" class="form-control" placeholder="SEcond NUmber">
        </div>
        <div class="form-group my-2">
            <select name="sign" class="form-select">
                <option value="">Choose </option>
                <option value="+">Add</option>
                <option value="-">Substract</option>
                <option value="*">Multiply</option>
                <option value="/">Divide</option>
                <option value="%">Modulus</option>
            </select>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary">
                Calculate
            </button>
        </div>

    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>