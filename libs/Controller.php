<?php

class Controller{

    function __construct(){
        echo "Main contriler <br>";
        $this->view = new View;
    }

}