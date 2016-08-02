<?php

class BlogController {
    
    
    function getUser($username,$pdo) {
        $sql = "SELECT * FROM users WHERE username=:username;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username]);
        
        $user = $stmt->fetchObject('UserModel');
        
        return $user;
       
    }
        
    
     function getArticles($pdo) {
        $sql = "SELECT * FROM articles";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $articles;
  
     
    }
        

    public function display ($template,$vars=[]){

         return new HTMLView($template,$vars);
        
    }
    
     
 
}
