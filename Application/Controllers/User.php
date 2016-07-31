<?php

class UserController extends Controller {
    public function index() {
        return new HTMLView('layout',['heading' => 'User Index!']);
    }
 
    
    public static function read_all($pdo){
        $sql = "SELECT * FROM users;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        $users = $pdo->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($users as $user) {
            return $user;
        }
        //return $users;
    }
}