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
    
    function __construct($id, $username, $password, $fullname, $role, $email, $dateofbirth, $creationdate) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->fullname = $fullname;
        $this->role = $role;
        $this->email = $email;
        $this->dateofbirth = $dateofbirth;
        $this->creationdate = $creationdate;
    }
    
    public static function read($pdo,$username){
        $sql = "SELECT * FROM items users WHERE username=:username;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username]);
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return new self ($user['id'],$user['username'],$user['password'],$user['fullname']
                            ,$user['role'],$user['email'],$user['dateofborth'],$user['creationdate']);
    }
    
}
