<?php
include_once 'Application/Config/config.php';

const BASEURL='http://localhost/Superglobals_Blog'; //Define base website address//Should be in config.php

$requestUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ///Determine web address requested

//Is the request page blank (i.e. index?) If so, display HomeController->Index() else Controller->Action
//Would be better to display HomeController->Index() if Controller and/or Action doesn't exist
if (strlen($requestUrl) == strlen(BASEURL)+1) {
    $requestString='/Home/Index';
}
else {
    $requestString = substr($requestUrl, strlen(BASEURL));
}


class Application  {
	public static function Main($url) {
		list($controller, $action) = array_slice(explode('/', $url), 1, 2);
                $controller .= 'Controller';
                $controller  = new $controller($action);
		return $controller();
        }
        
        public static function getArticles($pdo) {
        $sql = "SELECT * FROM articles";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $articles;
      
      
	}
}
$articles = Application::getArticles($pdo);
echo Application::Main($requestString);

