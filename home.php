<?php

session_start();

if($_SESSION['auth'] == false) {
    header('location: login_form.php');
}


include "./layouts/header.php"; 
include "./layouts/navbar.php";


?>




<div class="container">
  <div class="col-12">

  <?php if(isset($_SESSION['msg'])): ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?php echo $_SESSION['msg']; unset($_SESSION['msg']); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <?php endif; ?>

    <h1>Welcome to our home page.</h1>
  </div>
</div>

<?php include './layouts/footer.php'; ?>