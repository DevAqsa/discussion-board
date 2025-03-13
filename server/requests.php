<?php

include('../common/db.php');

if(isset($_POST['signup'])){
    echo "User name is " . $_POST['username']. "<br>";
    
    echo "Email is " . $_POST['email']. "<br>";

    echo "Password is " . $_POST['password']. "<br>";

    echo "Address is " . $_POST['address']. "<br>";
    
}
?>