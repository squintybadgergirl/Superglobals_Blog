<?php

include 'Application/Models/User.php';

const DB_DSN = 'mysql:host=localhost;dbname=blog';
const DB_USER = 'admin';
const DB_PASS = 'Cook!e5@?';

try {
      $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);


$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$users = $pdo->query("SELECT * FROM users")->fetchAll();

} catch (PDOException $e) {
	die($e->getMessage());
}
set_error_handler(function ($errorType, $errorMessage) {
    
  // 	echo \Cart\View\display('error', ['message' => $errorMessage]);
    echo $errorMessage;
}
)
;
