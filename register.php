<?php 

include "./init.php";

if($_SESSION['auth']) {
    header('location: home.php');
}

include 'db.php';

$name = $_POST['name'] ?? ''; // isset($_POST['name']) ? $_POST['name'] : ''
$password = $_POST['password'] ?? '';

if(!empty($name) && !empty($password)) {

    $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";
    $result =  mysqli_query($conn, $sql);
    
    if(mysqli_insert_id($conn) > 0) {
        $_SESSION['auth'] = true;
        $_SESSION['msg'] = 'Registrated Success.';
        header('location: home.php');
    }

    echo "Registeration Fail.";
}

header('location: register_form.php');



