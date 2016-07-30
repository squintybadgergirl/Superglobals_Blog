<?php
include 'Application/Config/config.php';


function getUser($pdo,$username) {

    try {
        $user_query = $pdo->prepare("SELECT * from users WHERE username=:username;");
        $user_query->execute(['username' => $username]);
        $user =$user_query->fetchObject('UserModel');
        return $user;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    
}


$username = 'sholmes';

$user = getUser($pdo,$username);


echo $user->getFullname();


