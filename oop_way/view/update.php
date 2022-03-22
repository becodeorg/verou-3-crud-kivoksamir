<!doctype html>
<html lang="en">
<head>
    <title>Update</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <div class="form-group my-3">
            <button name="home" class="btn btn-primary"><a href="./index.php" class="text-light text-decoration-none">Home</a></button>
        </div> 
        <form action="" method="POST" class="my-5">
                <hr class="mb-5">
                <div class="form-group my-3">
                    <label class="form-label fw-bold">User Name:</label>
                    <input type="text" class="form-control" name="username" placeholder="username">
                </div>
                <div class="form-group my-3">
                    <label class="form-label fw-bold">E-mail</label>
                    <input type="text" class="form-control" name="email" placeholder="e-mail">
                </div>
                <div class="form-group my-3 ">
                    <button name="update" class="btn btn-primary">Update</button>
                </div>      
        </form>
    </div>
</body>
</html>