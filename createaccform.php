<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    
    <form action="calculator.php" method="POST" class="w-75 m-auto mt-3">
        
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter your name">
        </div>
        <br>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email">
        </div>
        <br>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" class="form-select">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>  
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" id="country" list="countries" class="form-control">
            <datalist id="countries">
                <option value="Myanmar">
                <option value="United Kingdom">
                <option value="United Stated of america">
                <option value="Brazil">
                <option value="Thailand">
            </datalist>
        </div>
        <br>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="toc" id="toc">
            <label for="toc">You must agree to the terms and conditions.</label>
        </div>

        <div class="d-grid mt-3">
            <button class="btn btn-primary">
                Create your account
            </button>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>