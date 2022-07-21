<?php
require "header.php";
?>

<main>
  <?php  

  if(isset($_SESSION['userId'])) {
    echo '<h1>You are Logged In!!!</h1>';
  }
  else{
    echo '<h1>You are Logged Out!!!</h1>';
  }  
  ?>
</main>

<?php 

require "footer.php";

?>