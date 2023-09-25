<?php 
  session_start();

  $nameerror = $emailerr = $pwderr = $conpwderr = "";
  $name = $email = $password = $conpwd ="";
  $success = false;

  #Name Validation
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
    
    #Email Validation
    if(empty($_POST['email'])) {
      $emailerr = "Email id required";
    }
    else{
      $email = $_POST['email'];
      $email = trim($email);
      $email = htmlspecialchars($email);
      if(!preg_match("/([\w-]+@[\w-]+.[\w-]+)/",$email)){
        $emailerr = "Enter a Proper Email";
      }
    }

    #Password and ConfirmPassword
    if(!empty($_POST['pwd']) && ($_POST['pwd'] == $_POST['confpwd']))
    {
      $password = ($_POST['pwd']);
      $conpwd = ($_POST['confpwd']);

      if(!preg_match("/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).{8,}$/",$password)){
        $pwderr = "Please Enter a Password Correctly";
      }else {
        $success = true; // Set success flag to true
    }

    }elseif(empty($_POST['pwd'])){
      $conpwderr = "Please Check You've Entered Or Confirmed Your Password!"; 
    } else{
      $pwderr = "Please Enter a Correct Password";
    } 

    if ($success) {
      $con = mysqli_connect("localhost", "root", "varia@123", "test");

      $sql = "INSERT INTO register (name, email, pwd, confpwd) VALUES ('$name', '$email', '$password', '$conpwd')";
      
      if (mysqli_query($con, $sql)) {
          header("Location: login.php");
          exit();
      } else {
          echo "Error: " . mysqli_error($con);
      }
      
      mysqli_close($con);
  }
  }
  if (isset($_SESSION['logged_out'])) {

    unset($_SESSION['logged_out']);
} 

if (isset($_SESSION['auth']) && $_SESSION['auth'] === 'true') {
  $registrationDisabled = true;
} else {
  $registrationDisabled = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="CSS/register.css" />
<title>Register - CozyCom</title>
</style>
</head>
<body>
  <div class="register-container">
    <div class="header">Register</div>

    <?php if (!$registrationDisabled): ?>
    <form action="" method="post">

      <input type="text" class="input" placeholder="Name" name="name">
      <span class="error"><?php echo $nameerror; ?></span>

      <input type="text" class="input" placeholder="Email" name="email">
      <span class="error"><?php echo $emailerr; ?></span>

      <input type="password" class="input" placeholder="Password" name="pwd">
      <span class="error"><?php echo $pwderr ?></span>

      <input type="password" class="input" placeholder="Confirm Password" name="confpwd">
      <span class="error"><?php echo $conpwderr ?></span><br>

      <input type="submit" class="register-button" name="submit"><br><br>

      <span>Already a member <a href="login.php" class="">Login</a> <a href="index.php">Home</a></span>
    </form>
    <?php else: ?>
    <!-- Display a message if registration is disabled -->
    <p>Registration is disabled because you are already logged in.</p>
    <?php endif; ?>
  </div>
</body>
</html>