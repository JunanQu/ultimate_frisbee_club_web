<?php include('includes/init.php');

$current_page_id="log_in";

 ?>
 <?php
if (isset($_POST['login'])) {
  if (isset($current_user)) {
    record_message("Thank you!");
  }else{
    record_message("Please Try Again!");
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <script src="scripts/dropdown.js"></script>

  <title>Cornell Buds</title>
</head>
<body>

<?php include("includes/header.php");?>
<div class="wrapper">
  <h2>Login</h2>
  <?php
  echo "<h1 class='user_greetinhg_black'>";
  echo "</h1>";
  ?>
  <div class="form">
  <?php

  if (isset($current_user)){
      $_SESSION['login_user']= $username;
      header('Location: /index.php');
  }
  else
  {
    echo "<h1 class='user_greetinhg_black'>";
          print_messages();
    echo "</h1>";
  ?>
      <form action="log_in.php" method="post">
      <label>Username</label>
      <input type="text" name="username" placeholder="Username" required/>
      <label>Password</label>
      <input type="password" name="password" placeholder="Password" required />
      <button name="login" type="submit" value="LogIn">Log In</button>
    </form>

  </div>
  <?php
}?>
</div>

<?php include('includes/footer.php')?>
</body>
</html>
