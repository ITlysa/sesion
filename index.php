<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">Login Form</div>
                    <div class="card-body">
                        <form action="session.php" method='post'>
                            <div class="form-group">
                                <label for="file">Username:</label>
                                <input type="text" placeholder = 'Username' class='form-control' name='username'>
                            </div>
                            <div class="form-group">
                                <label for="file">Password:</label>
                                <input type="password" placeholder = 'Password' class='form-control' name = 'password'>
                            </div>
                                <input type="submit" name = 'sub' value ='Login' class='btn btn-info btn-block'>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>