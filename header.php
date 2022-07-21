<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <header>
    <nav class="flex">
      <a href="#">
        <img src="img/logo.png" alt="logo">
      </a>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">About me</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div>
        <?php
        if(isset($_SESSION['userId'])) {
        echo '<form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
        </form>';
        }
        else{
        echo '<form action="includes/login.inc.php" method="post">
          <input type="text" name="mailuid" placeholder="Username/E-mail...">
          <input type="password" name="pwd" placeholder="Password...">
          <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">Signup</a>';
        }
        ?>

      </div>
    </nav>
  </header>