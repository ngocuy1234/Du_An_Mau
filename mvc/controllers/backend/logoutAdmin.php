<?php

class logoutAdmin extends Controller {

    function index(){
        if(isset($_SESSION['staff_infor'])){
            unset($_SESSION['staff_infor']);
            header('Location: http://localhost/MVC/loginAdmin/');
        }
    }
}