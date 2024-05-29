<?php include('function.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="col-5 mx-auto bg-light p-4">
            <h1 class="text-center">Add Employee</h1>
            <form action="">
                <label for="">Name:</label>
                <input type="text" name="" placeholder="Name" id="" class="form-control my-2">
                <label for="">Gender:</label>
                <select name="" id="" class="form-select my-2">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <label for="">Position:</label>
                <select name="" id="" class="form-select my-2">
                    <option value="Web Developer">Web Developer</option>
                    <option value="Mobile Developer">Mobile Developer</option>
                    <option value="API Developer">API Developer</option>
                </select>
                <label for="">Rank:</label>
                <select name="" id="" class="form-select my-2">
                    <option value="Intern">Intern</option>
                    <option value="Junior">Junior</option>
                    <option value="Senior">Senior</option>
                </select>
                <label for="">Phone Number:</label>
                <input type="text" name="" placeholder="Phone Number" id="" class="form-control my-2">
                <label for="">Profile:</label>
                <input type="file" name="" id="" class="form-control my-2">
                
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="index.php" class="btn btn-danger">Back</a>
            </form>
        </div>
    </div>
</body>
</html>