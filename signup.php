<?php
require "header.php";
?>

<main>
  <section>
    <h1>Sign Up</h1>
    <?php 
    if(isset($_GET['error'])){
      if($_GET['error'] == "emptyfields"){
        echo '<p>Fill in all fields</p>';
      }
      else if ($_GET['error'] == "invaliduidmail"){
        echo '<p>Invalid username and e-mail!</p>';
      }
      else if ($_GET['error'] == "invaliduid"){
        echo '<p>Invalid username </p>';
      }
      else if ($_GET['error'] == "invalidmail"){
        echo '<p>Invalid e-mail!</p>';
      }
      else if ($_GET['error'] == "paswordcheck"){
        echo '<p>Your password do not match!</p>';
      }
      else if ($_GET['error'] == "usertaken"){
        echo '<p>You have already username</p>';
      }
    }
    ?>
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username">
      <input type="text" name="mail" placeholder="E-mail">
      <input type="password" name="pwd" placeholder="Password">
      <input type="password" name="pwd-repeat" placeholder="Repeat password">
      <button type="submit" name="signup-submit">Signup</button>
    </form>
  </section>
</main>

<?php 

require "footer.php";

?>