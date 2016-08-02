<?php

class UserModel {
    
    private $id;
    private $username;
    private $password;
    private $fullname;
    private $role;
    private $email;
    private $dateofbirth;
    private $creationdate;
    
    function __construct(){
    }
    
    public static function read($pdo,$username){
        $sql = "SELECT * FROM users WHERE username=:username;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username]);
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return new self ($user['id'],$user['username'],$user['password'],$user['fullname']
                            ,$user['role'],$user['email'],$user['dateofborth'],$user['creationdate']);
    }
    
}
