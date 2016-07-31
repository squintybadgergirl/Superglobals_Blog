<?php
include_once 'Application/Config/config.php';
include 'Application/Controllers/Index.php';
include 'Application/Controllers/User.php';
include 'Application/Models/View.php';



if (empty($_GET)) {
      $view = new IndexController('index');
       echo $view->index(); //This should happen automatically I think, when object instantiated
}

else if ($_GET['page'] == 'user') {
     $view = new UserController('index');
       echo $view->index(); //This should happen automatically I think, when object instantiated
       print_r($view->read_all($pdo));
}
else {
    echo 'other page';
}