<?php
SESSION_START();
include('../common/db.php');

if(isset($_POST['signup'])){
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $user =$conn->prepare("Insert into `users`
    (`id`,`username`, `email`, `password`, `address`)
    values(NULL, '$username', '$email', '$password', '$address');
    ");

    $result = $user->execute();

    if($result){
        echo "User registered successfully";
        $_SESSION['user'] = [
            'username' => $username,
            'email' => $email,
            'address' => $address
        ];
        header('Location: ../index.php');
    }else {
        echo "User registration failed";
    }
}else if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query ="select * from `users` where `email` = '$email' and `password` = '$password'";
   $result =  $conn->query($query);
}
?>