<?php 

include "./init.php";

unset($_SESSION['auth']);

header('location: login_form.php');