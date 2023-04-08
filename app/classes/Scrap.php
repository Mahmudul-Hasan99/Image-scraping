<?php

namespace App\classes;

class Scrap
{
    public $message;

    public function __construct()
    {
        $this->message="Hello";
    }

    public function index(){
        header('Location:action.php?page=home');
    }
}