<?php 
session_start();

if(isset($_POST['submit'])) {
    $con = mysqli_connect("localhost", "root", "varia@123", "test");
    $name = $_POST['name'];
    $password = $_POST['pwd'];

    $query = "select * from register where name='$name' and pwd='$password'";
    $res = mysqli_query($con, $query);

    if(mysqli_num_rows($res) == 1){
        $_SESSION['auth'] = 'true';
        header('location: index.php');
        exit();
    } else {
        echo "Wrong Username or Password";
    }
}

if (isset($_SESSION['logged_out'])) {

    unset($_SESSION['logged_out']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="CSS/login.css"/>
<title>Login - CozyCom</title>
</head>
<body>
  <div class="login-container">
    <div class="header">Login</div>
    
    <?php
    if (isset($_SESSION['auth']) && $_SESSION['auth'] === 'true') {
        header('location: index.php');
        exit();
    }
    ?>
    
    <form action="" method="post">
      <input type="text" class="input" placeholder="Username" name="name">

      <input type="password" class="input" placeholder="Password" name="pwd">

      <input type="submit" class="login-button" value="Login" name="submit"/><br><br>
    </form>

    <span>Don't have an account <a href="register.php">Register</a> <a href="index.php"> Home </a></span>
    
  </div>
</body>
</html>
