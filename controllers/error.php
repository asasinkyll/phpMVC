<?php

class Error extends Controller {

    function __construct(){
        parent::__construct();
        echo 'This is an error<br>';
    }

    function index(){
        $this->view->msg = 'This page dosnt exis';
        $this->view->render('error/index');
    }
}