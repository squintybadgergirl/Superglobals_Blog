<?php
include_once 'Application/Config/config.php';


  $blog = new BlogController();
  
  $user = $blog->getUser('sholmes',$pdo);
  
  $articles = $blog->getArticles($pdo);
    

 echo  $blog->display('index',['heading' => 'Home Page!', 'user' => $user, 'articles' => $articles]);
 