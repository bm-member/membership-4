<?php 

include 'db.php';

$name = $_POST['name'] ?? ''; // isset($_POST['name']) ? $_POST['name'] : ''
$password = $_POST['password'] ?? '';

if(!empty($name) && !empty($password)) {

    $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";
    $result =  mysqli_query($conn, $sql);
    
    if(mysqli_insert_id($conn) > 0) {
        echo "Registerated Success.";
        exit();
    }

}

echo "Registeration Fail.";


