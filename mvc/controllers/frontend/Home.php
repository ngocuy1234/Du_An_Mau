<?php

class Home extends Controller{

    function index(){

        $this->viewsCustomer("home" , $data = [
            'from' => 'home',
        ]);
        // var_dump($_GET['name']);
    }
}