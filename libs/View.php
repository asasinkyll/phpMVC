<?php

class View{

    function __construct(){
        echo 'this is the View';
    }

    public function render($name){
        require 'views/' . $name . '.php';
    }
}