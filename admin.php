<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>
<body>

<div class="container-fluid border" id="login">
    
    <h1 class="text-center">Login</h1>
    
    <form class="needs-validation" method="post" action="">
        <div class="form-group">
            <label class="form-label" for="email">Email address</label>
            <input name="t_user"class="form-control" type="email" id="email" pattern="+@gmail.com$" required>
       </div>
        <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <input name="t_pass" class="form-control" type="password" id="password" minlength="8" required>
        </div>
        <input class="btn btn-success w-100" type="submit" value="Submit" name="submit">
    </form>

</div>
</body>
</html>


<?php

$con=mysqli_connect('localhost','root','','ask_stu') or die(mysqli_error());

if(isset($_POST['submit'])) {
    
    // Get username and password from the form
    $t_user = $_POST['t_user'];
    $t_pass = $_POST['t_pass'];
    
    // Prepare the SQL query
    $sql = "SELECT * FROM tech WHERE t_user='$t_user' AND t_pass='$t_pass'";
    $result = mysqli_query($con, $sql);

    // Check if the query returned any rows
    if (mysqli_num_rows($result) > 0) {
        // Redirect to a secure page
        //header("Location: secure_page.php");
        echo "Valid username or password, Admin";
        exit();
    } else {
        // Display an error message
        echo "Invalid username or password, Admin";
    }
}


?>

