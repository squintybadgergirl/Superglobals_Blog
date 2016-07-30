<?php

class UserController extends Controller {
    public function index() {
        return new HTMLView('layout',['heading' => 'User Index!']);
    }
    
}