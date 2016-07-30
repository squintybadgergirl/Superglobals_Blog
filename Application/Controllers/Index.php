<?php
//Miscellanous

include 'Controller.php';

class IndexController extends Controller {
    public function index() {
        return new HTMLView('layout',['heading' => 'Home Page!']);
    }
    
}