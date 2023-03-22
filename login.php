<?php include("header.php"); ?>

<br>
<div class="container-fluid border" id="login">
    
        <h1 class="text-center">Login</h1>
        
        <form class="needs-validation" method="post" action="">
            <div class="form-group">
                <label class="form-label" for="email">Email address</label>
                <input name="stu_user" class="form-control" type="email" id="email" pattern="+@gmail.com$" required>
           </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input name="stu_pass" class="form-control" type="password" id="password" minlength="8" required>
            </div>
            <input class="btn btn-success w-100" type="submit" value="Submit" name="submit">
        </form>

    </div>
<br>
<?php

$con=mysqli_connect('localhost','root','','ask_stu') or die(mysqli_error());

if(isset($_POST['submit'])) {
    
    
    $stu_user = $_POST['stu_user'];
    $stu_pass = $_POST['stu_pass'];
    
 
    $sql = "SELECT * FROM stu WHERE stu_user='$stu_user' AND stu_pass='$stu_pass'";
    $result = mysqli_query($con, $sql);

    // Check if the query returned any rows
    if (mysqli_num_rows($result) > 0) {
        
        echo "Valid username or password";
        
    } else {
        
        echo "Invalid username or password";
    }
}
?>
<?php include("footer.php"); ?>