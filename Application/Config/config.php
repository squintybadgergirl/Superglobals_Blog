<!--Contains DB connection and constants-->

<?php

include 'Application/Models/User.php';
include 'Application/Models/Article.php';
include 'Application/Models/View.php';
include 'Application/Controllers/Index.php';

const DB_DSN = 'mysql:host=localhost;dbname=blog';
const DB_USER = 'admin';
const DB_PASS = 'Cook!e5@?';
const DEFAULT_ARTICLE_ID = 1;
const CATEGORIES = ['Sport','Technology','Fashion'];
const ROLES = ['admin','user'];

try {
      $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);


$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$users = $pdo->query("SELECT * FROM users")->fetchAll();

} catch (PDOException $e) {
	die($e->getMessage());
}
set_error_handler(function ($errorType, $errorMessage) {
    
  // 	add a call to view error.phtml here?
    echo $errorMessage;
}
)
;
