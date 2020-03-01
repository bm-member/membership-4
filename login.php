<?php 
include './init.php';

$name = $_POST['name'] ?? '';
$password = $_POST['password'] ?? '';

if(!empty($name) && !empty($password)) {
    $sql = "SELECT * FROM users WHERE name='$name' AND password='$password' ";
    $result =  mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $_SESSION['auth'] = true;
        $_SESSION['msg'] = 'Login Success.';
        header('location: home.php');
    }

    echo "Login Fail.";
}

header('location: login_form.php');


