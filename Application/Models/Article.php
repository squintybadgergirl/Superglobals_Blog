<?php

class ArticleModel {

    private $id;
    private $title;
    private $body;
    private $author;
    private $category;
    private $creationdate;
    private $modifieddate;
    private $status;
    
    function __construct(){
        $sql = "SELECT * FROM items article";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        $articles = $stmt->fetchALL();
     
        return $articles;
    }
    
    public static function read($pdo,$id){
        $sql = "SELECT * FROM items articles WHERE id=:id;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        
        $article = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return new self ($article['id'],$article['title'],$article['body'],$article['author']
                ,$article['category'],$article['creationdate'],$article['modifieddate'],$article['status']);
    }
    
     public static function read_all($pdo){
        $sql = "SELECT * FROM items article";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        $articles = $stmt->fetchALL();
     
        return $articles;
    }
    
    
        
    
}
