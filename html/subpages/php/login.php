<!-- 
 SENG73000 
 login.php
 By:Joshua Diploma
 Purpose: Basic php
 -->
 <?php
 $submitted = !empty($_POST);
 ?>

<!DOCTYPE html>
<html>
    <head><title>Form Handler Page</title></head>
    <body>
        <p>Form Submitted? <?php echo (int) $submitted; ?></p>
        <p>Your login info is</p>
        <ul>
            <li><b>username:</b>: <?php echo $_POST['username']; ?></li>
            <li><b>password:</b>: <?php echo $_POST['password']; ?></li>
        </ul>
    </body>
</html>
