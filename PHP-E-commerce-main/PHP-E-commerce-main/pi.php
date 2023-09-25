<?php 
  session_start();
  $con = mysqli_connect("localhost", "root", "varia@123");

  $nameerror = $emailerr = $password = "";
  $name = $email = $password = "";

  if(isset($_POST['submit'])) {
    if(empty($_POST['name'])){
      $nameerror = "Name is required";
    } else {
      $name = $_POST['name'];
      $name = trim($name);
      $name = htmlspecialchars($name);
      if(!preg_match("/^[a-zA-Z ]+$/", $name)){
        $nameerror = "Name only contains characters";
      }
    }
    // Add additional validation logic for other fields here
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="CSS/register.css"/>
  <title>Register - CozyCom</title>
</head>
<body>
  <div class="register-container">
    <div class="header">Register</div>
    <form action="" method="post">

      <input type="text" class="input" placeholder="Name" name="name">*
      <span class="error"><?php echo $nameerror; ?></span>

      <input type="email" class="input" placeholder="Email" name="email">
      <input type="password" class="input" placeholder="Password" name="pwd" >
      <input type="password" class="input" placeholder="Confirm Password" name="confpwd" >
      <input type="submit" class="register-button" name="submit"><br><br>

      <span>Already a member <a href="login.html" class="">Login</a> <a href="index.html">Home</a></span>
    </form>
  </div>
</body>
</html>
