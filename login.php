<?php 

include 'db.php';

$name = $_POST['name'] ?? '';
$password = $_POST['password'] ?? '';

if(!empty($name) && !empty($password)) {
    $sql = "SELECT * FROM users WHERE name='$name' AND password='$password' ";
    $result =  mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        echo 'Login Success.';
    }
    
    die();

}

echo "Login Fail.";


