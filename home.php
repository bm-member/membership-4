<?php

session_start();

if($_SESSION['auth'] == false) {
    header('location: login_form.php');
}


include "./header.php"; 
include "./navbar.php";


?>

<?php if(isset($_SESSION['msg'])): ?>

<div class="alert alert-success" role="alert">
  <?php 
  echo $_SESSION['msg']; 
  unset($_SESSION['msg']);
  ?>
</div>

<?php endif; ?>


<h1>Welcome to our home page.</h1>

<?php include './footer.php'; ?>