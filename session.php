<?php
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];


    if(isset($_POST['logout'])){
        session_destroy();
        header("Location: index.php");
        die();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>

<?php
if(isset($_SESSION['username']) && $_SESSION['password'] != ""){
    if(isset($_POST['sub'])) {
        if($_SESSION['username'] != '' && $_SESSION['password'] != '') {
    ?>
        <div class="container mt-5">
            <div class="col-12">
                <ul class='list-group'>
                    <li class='list-group-item'><?php echo "<strong> Username: </strong>".$_SESSION['username'] ?></li>
                    <li class='list-group-item'><?php echo "<strong> Password: </strong>" .$_SESSION['password'] ?></li>
                </ul>
                <form action="#" method="POST">
                    <input type="submit" name="logout" value="Logout">
                </form>
            </div>
        </div>

    <?php
        }else{
            echo ('You are wrong!!!');
        }
    }
    
}else{
    header("Location: index.php");
    die();
}
?>