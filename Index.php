<?php
include_once 'Application/Config/config.php';
include 'Application/Controllers/Index.php';
include 'Application/Models/View.php';



if (empty($_GET)) {
      $view = new IndexController('index');
      print_r($view->__invoke());
      echo $view->index();
      
      print_r(new IndexController('index'));
}

else {
    echo 'other page';
}