<?php
include_once 'Application/Config/config.php';

//Should invoke a controller I think but I can't get it to work! '
//$view = new IndexController('index');
//$view->invoke();
//print_r($view);
//echo $view;


//Can get the Model bit to work though
//Create a new instance of HTMLView class 
//which displays layout.phtml with 'Yay'! passed in as a heading
$view2 = new HtmlView('layout',['heading' => 'Yay!']);

echo $view2;