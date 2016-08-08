<?php

 

abstract class Controller { //given
	private $method;
	
	public function __construct($method) {
		$this->method = $method;
	}
	public function __invoke() {
		return [$this, $this->method]();
	}
}

//class UserController extends Controller {  //given
//	public function index() {
//		return new HtmlView('layout', ['heading' => 'User Index!']);
//	}
//}
//
//class ItemController extends Controller {
//	public function index() {
//		return new HtmlView('layout', ['heading' => 'Item!']);
//	}
//	
//	public function listItems() {
//		return new HtmlView('layout', ['heading' => 'Items Index!']);
//	}
//}



class HomeController extends Controller {
    
    
    
    public function getUser($username,$pdo) {
        $sql = "SELECT * FROM users WHERE username=:username;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username]);
        
        $user = $stmt->fetchObject('UserModel');
        
        return $user;
       
    }
        
    
    public function getArticles($pdo) {
        $sql = "SELECT * FROM articles";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $articles;
  
     
    }
        

    public function index() {
        return new HtmlView('index', ['heading' => 'Homepage!']);
	}
    public function article() {
        return new HtmlView('article', ['article'=>['title'=> 'The Title', 'date'=> '10/01/1990','fullname'=> 'My Name','body'=>'The Body']]);
	}
        
    public function post() {
        return new HtmlView('post');
         }
         
    public function login() {
        return new HtmlView('login');
         }
         
    public function register() {
        return new HtmlView('register');
         }
     
    
 
}
